# Main Repo Example: Recurrings Endpoints

The bundle support is now in place. Below is a controller shape that matches your existing Fortnox controllers closely enough to copy into the main repo.

## `src/FortnoxContactBundle/Controller/FortnoxRecurringsController.php`

```php
<?php

namespace App\FortnoxContactBundle\Controller;

use App\AdminBundle\Entity\Account;
use App\AdminBundle\Helpers\JsonRequest;
use App\CrmBundle\Entity\Contact;
use App\LogBundle\Exception\NonLoggableHttpException;
use App\RolesBundle\Annotation\RequiresRole;
use FOS\RestBundle\Controller\Annotations as Rest;
use ITBMedia\FortnoxBundle\Model\Recurring;
use ITBMedia\FortnoxBundle\Model\RecurringPatchOperation;
use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class FortnoxRecurringsController extends BaseFortnoxController
{
    /**
     * @Route("/api/fortnox/recurrings.json", name="fortnox_get_recurrings", methods={"GET"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT"})
     */
    public function getFortnoxRecurrings(Request $request)
    {
        [$service, $token, $params] = $this->handleFortnoxRequestList($request);
        $res = $service->getRecurrings($token, $params);

        return $this->handleFortnoxResponse($res);
    }

    /**
     * @Route("/api/fortnox/contacts/{id}/recurrings.json", name="fortnox_contact_get_recurrings", methods={"GET"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT"})
     */
    public function getContactFortnoxRecurrings(Request $request, $id)
    {
        [$service, $token, $params] = $this->handleFortnoxRecurringRequest($request, $id);
        $res = $service->getRecurrings($token, $params);

        return $this->handleFortnoxResponse($res);
    }

    /**
     * @Route("/api/fortnox/recurrings/{id}.json", name="fortnox_get_recurring", methods={"GET"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function getFortnoxRecurring(Request $request, $id)
    {
        [$service, $token] = $this->handleFortnoxRequestForSingle($request);
        $res = $service->getRecurring($token, $id);

        return $this->handleFortnoxResponse($res);
    }

    /**
     * @Route("/api/fortnox/contacts/{id}/recurrings.json", name="fortnox_create_recurring", methods={"POST"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function createFortnoxRecurring(Request $request, $id)
    {
        $json = new JsonRequest($request);
        [$service, $token, $contact] = $this->handleFortnoxRecurringCreateRequest($request, $id);

        $customer = $json->get('customer', []);
        $customer['number'] = (string) $contact->getFortnoxCustomerId();
        $json->set('customer', $customer);

        $recurring = $service->createRecurring($token, Recurring::fromArray($json->all()));

        return $this->handleFortnoxResponse($recurring);
    }

    /**
     * @Route("/api/fortnox/recurrings/{id}.json", name="fortnox_update_recurring", methods={"PUT"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function updateFortnoxRecurring(Request $request, $id)
    {
        $json = new JsonRequest($request);
        $json->set('id', $id);

        [$service, $token] = $this->handleFortnoxRequestForSingle($request);
        $recurring = $service->updateRecurring($token, $id, Recurring::fromArray($json->all()));

        return $this->handleFortnoxResponse($recurring);
    }

    /**
     * @Route("/api/fortnox/recurrings/{id}.json", name="fortnox_patch_recurring", methods={"PATCH"})
     * @Rest\View(serializerGroups={"details"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function patchFortnoxRecurring(Request $request, $id)
    {
        $json = new JsonRequest($request);
        [$service, $token] = $this->handleFortnoxRequestForSingle($request);

        $operations = array_map(
            static fn(array $item): RecurringPatchOperation => RecurringPatchOperation::fromArray($item),
            $json->all()
        );

        $recurring = $service->patchRecurring($token, $id, $operations);

        return $this->handleFortnoxResponse($recurring);
    }

    /**
     * @Route("/api/fortnox/recurrings/invoice_requests.json", name="fortnox_get_recurring_invoice_requests", methods={"GET"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function getRecurringInvoiceRequests(Request $request)
    {
        [$service, $token, $params] = $this->handleFortnoxRequestList($request);
        $res = $service->getRecurringInvoiceRequests($token, $params);

        return $this->handleFortnoxResponse($res);
    }

    /**
     * @Route("/api/fortnox/recurrings/invoice_requests.json", name="fortnox_create_recurring_invoice_requests", methods={"POST"})
     * @RequiresRole(roles={"ROLE_FORTNOX_CONTRACT_WRITE"})
     */
    public function createRecurringInvoiceRequests(Request $request)
    {
        $json = new JsonRequest($request);
        [$service, $token] = $this->handleFortnoxRequestForSingle($request);

        $processingMode = $request->query->get('processing-mode')
            ?? $request->query->get('processing_mode')
            ?? $json->get('processing_mode')
            ?? 'SYNC';

        $res = $service->createRecurringInvoiceRequests(
            $token,
            $json->get('recurring_ids', []),
            $processingMode
        );

        return $this->handleFortnoxResponse($res);
    }

    private function handleFortnoxRecurringRequest(Request $request, $id): array
    {
        $em = $this->entityManager;
        $contact = $em->find(Contact::class, $id);

        if (!$contact) {
            throw new \Exception('Contact not found', 404);
        }

        $integration = $contact->getFortnoxIntegration();
        if (!$integration) {
            throw new \Exception('Fortnox integration not found', 404);
        }
        if ($integration->getRemoved()) {
            throw new \Exception('Fortnox integration removed', 404);
        }
        if (!$contact->getFortnoxCustomerId()) {
            throw new NonLoggableHttpException('Denna kontakt ar inte synkad till Fortnox (saknar kundnummer)', 404);
        }

        $account = $em->find(Account::class, $this->getUser()->getAccountId());
        $service = $this->fortnoxServiceDecorated;
        $service->setAccount($account);

        $token = Token::fromArray($integration->getAuthentication());
        $params = $this->handleParams($request);
        $params['customer_ids'] = [(string) $contact->getFortnoxCustomerId()];

        return [$service, $token, $params];
    }

    private function handleFortnoxRecurringCreateRequest(Request $request, $id): array
    {
        $em = $this->entityManager;
        $contact = $em->find(Contact::class, $id);

        if (!$contact) {
            throw new \Exception('Contact not found', 404);
        }
        if (!$contact->getFortnoxCustomerId()) {
            throw new NonLoggableHttpException('Denna kontakt ar inte synkad till Fortnox (saknar kundnummer)', 404);
        }

        [$service, $token] = $this->handleFortnoxRequestForSingle($request);

        return [$service, $token, $contact];
    }
}
```

## Small Base Controller Tweaks

The recurring endpoints work without changing the big Fortnox response helper, but these two small additions make things cleaner.

### 1. Ignore `q` for recurrings

Add this case inside `handleParams()` in `BaseFortnoxController`:

```php
case 'recurrings':
    unset($params['q']);
    break;
```

Reason: the recurring alpha API does not support the legacy `documentnumber` / `customername` search mapping.

## Notes

- I reused your existing contract roles. If you want separate ACLs, rename them to recurring-specific roles.
- The contact-scoped recurring list uses `customer_ids` with the contact's Fortnox customer id. That matches the alpha docs as closely as possible, but this is still an inference because Fortnox labels that filter as customer IDs while your contact stores a customer number.
- I did not add board/file sync logic here because recurring entities do not have the same preview/PDF flow as offers, orders, and invoices in your existing controller stack.
