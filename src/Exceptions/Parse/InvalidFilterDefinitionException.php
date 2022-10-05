<?php

namespace karwan\restapi-laravel\Exceptions\Parse;

use karwan\restapi-laravel\Exceptions\ApiException;
use karwan\restapi-laravel\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}