<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    //
    protected $fillable = ['nome', 'telefone', 'email', 'mensagem', 'motivo_contatos_id'];
}