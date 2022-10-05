<?php

namespace karwan\restapi-laravel\Exceptions\Parse;

use karwan\restapi-laravel\Exceptions\ApiException;
use karwan\restapi-laravel\Exceptions\ErrorCodes;

class InvalidOrderingDefinitionException extends ApiException
{
    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_ORDERING_INVALID;

    protected $message = "Ordering defined incorrectly";
}