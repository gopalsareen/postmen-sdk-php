<?php

namespace Postmen;

use Exception;

/**
 * Class Rates
 *
 * @package Postmen
 */
class PostmenException extends Exception
{
	private $retryable;
	private $details;
    private $data;


    public function __construct($message, $code, $retryable, $details, $data = null, Exception $previous = null) {
		$this->retryable = $retryable;
		$this->details = $details;
        $this->data = $data;
        parent::__construct($message, $code, $previous);
	}

	public function isRetryable() {
		return $this->retryable;
	}

	public function getDetails() {
		return $this->details;
	}

    public function getData() {
        return $this->data;
    }
}
