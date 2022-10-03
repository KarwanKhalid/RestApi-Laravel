<?php

namespace KarwanKhalid\RestAPI\Exceptions\Parse;

use KarwanKhalid\RestAPI\Exceptions\ApiException;
use KarwanKhalid\RestAPI\Exceptions\ErrorCodes;

class InvalidLimitException extends ApiException
{
    protected $statusCode = 422;

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innercode = ErrorCodes::INNER_INVALID_LIMIT;

    protected $message = "Limit cannot be negative or zero";
}