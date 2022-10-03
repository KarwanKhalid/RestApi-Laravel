<?php

namespace KarwanKhalid\RestAPI\Tests\Controllers;

use KarwanKhalid\RestAPI\ApiController;
use KarwanKhalid\RestAPI\Tests\Models\DummyPost;

class PostController extends ApiController
{
    protected $model = DummyPost::class;
}