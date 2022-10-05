<?php

namespace karwan\restapi-laravel\Tests\Controllers;

use karwan\restapi-laravel\ApiController;
use karwan\restapi-laravel\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}