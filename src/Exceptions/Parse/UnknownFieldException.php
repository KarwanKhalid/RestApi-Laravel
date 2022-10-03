<?php

namespace KarwanKhalid\RestAPI\Exceptions\Parse;

use KarwanKhalid\RestAPI\Exceptions\ApiException;
use KarwanKhalid\RestAPI\Exceptions\ErrorCodes;

class UnknownFieldException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_UNKNOWN_FILED_EXCEPTION;

    protected $message = "One of the specified fields does not exist";
}