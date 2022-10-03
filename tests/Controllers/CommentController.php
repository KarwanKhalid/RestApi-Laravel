<?php

namespace KarwanKhalid\RestAPI\Tests\Controllers;

use KarwanKhalid\RestAPI\ApiController;
use KarwanKhalid\RestAPI\Tests\Models\DummyComment;

class CommentController extends ApiController
{
    protected $model = DummyComment::class;
}