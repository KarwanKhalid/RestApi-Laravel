<?php

namespace KarwanKhalid\RestAPI\Exceptions\Parse;

use KarwanKhalid\RestAPI\Exceptions\ApiException;
use KarwanKhalid\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}