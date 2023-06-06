<?php

namespace Karwan\RestAPI\Tests\Models;

use Karwan\RestAPI\ApiModel;

class DummyUser extends ApiModel
{

    protected $table = 'dummy_users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'age',
    ];

    protected $filterable = [
        'name', 'email', 'age',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    /**
     * Get the phone record associated with the user.
     */
    public function phone()
    {
        return $this->hasOne('Karwan\RestAPI\Tests\Models\DummyPhone', 'user_id', 'id');
    }

    /**
     * The posts that belong to the user.
     */
    public function posts()
    {
        return $this->hasMany('Karwan\RestAPI\Tests\Models\DummyPost', 'user_id', 'id');
    }

    /**
     * The comments that belong to the user.
     */
    public function comments()
    {
        return $this->hasMany('Karwan\RestAPI\Tests\Models\DummyComment', 'user_id', 'id');
    }
}
