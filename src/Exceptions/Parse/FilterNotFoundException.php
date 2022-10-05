<?php

namespace karwan\restapi-laravel\Exceptions\Parse;

use karwan\restapi-laravel\Exceptions\ApiException;
use karwan\restapi-laravel\Exceptions\ErrorCodes;

class FilterNotFoundException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_FILTER_NOT_FOUND;

    protected $message = "Requested filter not found";

}