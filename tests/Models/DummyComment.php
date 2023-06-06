<?php

namespace Karwan\RestAPI\Tests\Models;

use Karwan\RestAPI\ApiModel;

class DummyComment extends ApiModel
{

    protected $table = 'dummy_comments';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'comments', 'user_id', 'post_id',
    ];

    protected $filterable = [
        'comments', 'user_id', 'post_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the post that owns the comment.
     */
    public function post()
    {
        return $this->belongsTo('Karwan\RestAPI\Tests\Models\DummyPost');
    }
}
