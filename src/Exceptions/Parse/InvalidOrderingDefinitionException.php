<?php

namespace Karwan\RestAPI\Exceptions\Parse;

use Karwan\RestAPI\Exceptions\ApiException;
use Karwan\RestAPI\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}
