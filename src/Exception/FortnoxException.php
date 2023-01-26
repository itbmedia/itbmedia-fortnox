<?php
namespace ITBMedia\FortnoxBundle\Exception;

class FortnoxException extends \Exception {
	/**
	 * Summary of status
	 * @var int
	 */
	protected $statusCode;

	public function __construct(int $statusCode = 0, int $code = 0, string $message = "", \Throwable $previous = null) {
		parent::__construct($message, $code, $previous);
		$this->statusCode = $statusCode;
	}

	/**
	 * Summary of status
	 * @return int
	 */
	public function getStatusCode() {
		return $this->statusCode;
	}
}