<?php

namespace KarwanKhalid\RestAPI\Tests\Controllers;

use KarwanKhalid\RestAPI\ApiController;
use KarwanKhalid\RestAPI\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}