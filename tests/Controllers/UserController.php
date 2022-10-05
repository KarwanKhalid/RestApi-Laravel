<?php

namespace karwan\restapi-laravel\Tests\Controllers;

use karwan\restapi-laravel\ApiController;
use karwan\restapi-laravel\Tests\Models\DummyUser;

class UserController extends ApiController
{
    protected $model = DummyUser::class;
}