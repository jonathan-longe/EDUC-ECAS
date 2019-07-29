<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\MockEntities\Assignment;
use Faker\Generator as Faker;

$factory->define(Assignment::class, function (Faker $faker) {

    $contract_stages = \App\MockEntities\ContractStage::pluck('id')->toArray();
    $assignment_statuses = \App\MockEntities\AssignmentStatus::pluck('id')->toArray();
    $sessions = \App\MockEntities\Session::pluck('id')->toArray();
    $roles = \App\MockEntities\Role::pluck('id')->toArray();
    $profiles = \App\MockEntities\Profile::pluck('id')->toArray();

    return [

        'contact_id'        => $faker->randomElement($profiles),
        'session_id'        => $faker->randomElement($sessions),
        'role_id'           => $faker->randomElement($roles),
        'contract_stage'    => $faker->randomElement($contract_stages),
        'status'            => $faker->randomElement($assignment_statuses),


    ];
});
