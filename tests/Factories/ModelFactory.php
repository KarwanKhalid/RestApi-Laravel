<?php

$factory->define(
    \karwan\restapi-laravel\Tests\Models\DummyUser::class,
    function(Faker\Generator $faker){
        return [
            'name' => $faker->name,
            'email' => $faker->email,
            'age' => $faker->randomDigitNotNull,

        ];
    }
);

$factory->define(
    \karwan\restapi-laravel\Tests\Models\DummyPhone::class,
    function(Faker\Generator $faker){

        return [
            'name' => $faker->name,
            'modal_no' => $faker->swiftBicNumber,
            'user_id' => \karwan\restapi-laravel\Tests\Models\DummyUser::all()->random()->id,
        ];
    }
);

$factory->define(\karwan\restapi-laravel\Tests\Models\DummyPost::class,
    function(Faker\Generator $faker)
    {
        $createFactory = \Illuminate\Database\Eloquent\Factory::construct(\Faker\Factory::create(),
            base_path() . '/laravel-rest-api/tests/Factories');
        return [
            'post' => $faker->company,
            'user_id' => \karwan\restapi-laravel\Tests\Models\DummyUser::all()->random()->id,
        ];
    }
);

$factory->define(\karwan\restapi-laravel\Tests\Models\DummyComment::class,
    function(Faker\Generator $faker)
    {
        $createFactory = \Illuminate\Database\Eloquent\Factory::construct(\Faker\Factory::create(),
            base_path() . '/laravel-rest-api/tests/Factories');
        return [
            'comment' => $faker->text,
            'user_id' => \karwan\restapi-laravel\Tests\Models\DummyUser::all()->random()->id,
            'post_id' => \karwan\restapi-laravel\Tests\Models\DummyPost::all()->random()->id,
        ];
    }
);






