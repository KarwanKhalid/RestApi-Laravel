<?php

namespace Karwan\RestAPI\Exceptions\Parse;

use Karwan\RestAPI\Exceptions\ApiException;
use Karwan\RestAPI\Exceptions\ErrorCodes;

class InvalidFilterDefinitionException extends ApiException
{

    protected $code = ErrorCodes::REQUEST_PARSE_EXCEPTION;

    protected $innerError = ErrorCodes::INNER_INVALID_FILTER_DEFINITION;

    protected $message = "Filter defined incorrectly";

}
