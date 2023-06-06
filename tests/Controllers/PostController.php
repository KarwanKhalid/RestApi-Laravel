<?php

namespace Karwan\RestAPI\Tests\Controllers;

use Karwan\RestAPI\ApiController;
use Karwan\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}
