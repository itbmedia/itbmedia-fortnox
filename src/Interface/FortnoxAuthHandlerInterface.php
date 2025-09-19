<?php

namespace ITBMedia\FortnoxBundle\Interface;

use ITBMedia\FortnoxBundle\Model\Token;
use Symfony\Component\HttpFoundation\Response;

interface FortnoxAuthHandlerInterface
{
  /**
   * @param array<string,mixed> $state
   */
  public function onSuccess(Token $token, array $state): Response;

  /**
   * Structured failure payload.
   *
   * Expected keys (all optional except message):
   * - message (string): human-readable summary
   * - code (int): your app error code or HTTP-ish status (e.g., 400/401/502)
   * - error_key (string): stable machine key when available (e.g., "OAuthDenied")
   * - http_status (int): HTTP status returned by Fortnox token endpoint, if any
   * - provider_error (string): raw "error" from Fortnox, if present
   * - provider_error_description (string): raw "error_description" from Fortnox, if present
   * - curl_errno (int): cURL errno on transport failures
   * - curl_error (string): cURL error message on transport failures
   * - raw (array|string): raw decoded or original response body for logging (avoid leaking to UI)
   *
   * @param array<string,mixed> $error
   * @param array<string,mixed> $state
   */
  public function onFailure(array $error, array $state): Response;
}
