<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\SiteContato;
use Faker\Generator as Faker;

class SiteContatoFactory extends Factory
{
    $factory->define(SiteContato::class, function (Faker $faker) {
        return [
            'nome' => $faker->name,
            'telefone' => $faker->tollFreePhoneNumber,
            'email' => $faker->unique()->email,
            'motivo_contato' =>$faker->numberBetween(1, 3),
            'mensagem' => $faker->text(200)
        ];
    });
}





