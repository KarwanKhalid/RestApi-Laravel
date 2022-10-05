<?php

namespace karwan\restapi-laravel\Exceptions\Parse;

use karwan\restapi-laravel\Exceptions\ApiException;
use karwan\restapi-laravel\Exceptions\ErrorCodes;

class UnknownFieldException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_UNKNOWN_FILED_EXCEPTION;

    protected $message = "One of the specified fields does not exist";
}