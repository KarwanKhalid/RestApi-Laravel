<?php

namespace karwan\restapi-laravel\Tests\Controllers;

use karwan\restapi-laravel\ApiController;
use karwan\restapi-laravel\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}