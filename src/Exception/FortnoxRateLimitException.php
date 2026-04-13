<?php

namespace ITBMedia\FortnoxBundle\Exception;

class FortnoxRateLimitException extends \Exception
{
  private int $retriesAttempted;

  public function __construct(string $message = "", int $code = 0, int $retriesAttempted = 0, \Throwable $previous = null)
  {
    parent::__construct($message, $code, $previous);
    $this->retriesAttempted = $retriesAttempted;
  }

  public function getRetriesAttempted(): int
  {
    return $this->retriesAttempted;
  }
}
