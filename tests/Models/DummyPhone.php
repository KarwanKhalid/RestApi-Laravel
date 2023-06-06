<?php

namespace Karwan\RestAPI\Tests\Models;

use Karwan\RestAPI\ApiModel;

class DummyPhone extends ApiModel
{

    protected $table = 'dummy_phones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'modal_no', 'user_id',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
