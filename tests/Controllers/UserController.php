<?php

namespace Karwan\RestAPI\Tests\Controllers;

use Karwan\RestAPI\ApiController;
use Karwan\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}
