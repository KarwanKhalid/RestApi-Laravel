<?php

namespace Karwan\RestAPI\Tests\Controllers;

use Karwan\RestAPI\ApiController;
use Karwan\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}
