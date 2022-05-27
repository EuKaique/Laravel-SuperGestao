<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $contato = new SiteContato;
        // $contato->nome = 'Sistema SG';
        // $contato->telefone = '49 3323-4157';
        // $contato->email = 'contato@sg.com.br';
        // $contato->motivo_contato = 1;
        // $contato->mensagem = 'Seja bem-vindo ao Sistema SG';
        // $contato->save();
        factory(SiteContato::class, 100)->create();
    }
}
