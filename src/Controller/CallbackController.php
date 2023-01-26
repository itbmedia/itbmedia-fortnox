<?php
namespace ITBMedia\FortnoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class CallbackController extends Controller
{
    private ParameterBagInterface $parameterBag;
    private EventDispatcherInterface $eventDispatcher;

    public function __construct(ParameterBagInterface $parameterBag, EventDispatcherInterface $eventDispatcher)
    {
        $this->parameterBag = $parameterBag;
        $this->eventDispatcher = $eventDispatcher;
    }

    public function fortnoxCallback(Request $request)
    {
        return new JsonResponse(["ok"], 200);
    }
}