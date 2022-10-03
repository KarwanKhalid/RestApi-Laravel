<?php

namespace KarwanKhalid\RestAPI\Exceptions\Parse;

use KarwanKhalid\RestAPI\Exceptions\ApiException;
use KarwanKhalid\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}