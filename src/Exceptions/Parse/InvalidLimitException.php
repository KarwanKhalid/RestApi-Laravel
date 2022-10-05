<?php

namespace karwan\restapi-laravel\Exceptions\Parse;

use karwan\restapi-laravel\Exceptions\ApiException;
use karwan\restapi-laravel\Exceptions\ErrorCodes;

class InvalidLimitException extends ApiException
{
    protected $statusCode = 422;

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innercode = ErrorCodes::INNER_INVALID_LIMIT;

    protected $message = "Limit cannot be negative or zero";
}