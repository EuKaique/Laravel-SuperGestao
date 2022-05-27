<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Fornecedor;

class FornecedorSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Instanciando o objeto
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor 100';
        $fornecedor->site = 'fornecedor100.com.br';
        $fornecedor->uf = 'CE';
        $fornecedor->email = 'contato@fornecedor100.com.br';
        $fornecedor->save();

        // método create (atenção para o atributo fillable da classe)
        Fornecedor::create([
            'nome' => 'Fernando',
            'site' => 'fernando.com.br',
            'uf' => 'RS',
            'email' => 'contato@fernando.com.br'
        ]);

        // insert (não passa pelo tratamento do Eloquent)
        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor 300',
            'site' => 'fornecedor300.com.br',
            'uf' => 'SC',
            'email' => 'contato@fornecedor300.com.br'
        ]);
    }
}
