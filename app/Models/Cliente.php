<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'cpf', 'rg','user_register', 'user_update', 'birth_date', 'phone_number', 'state_birth'];

    protected $casts = [
        'birth_date' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];

    public function getCpfAttribute(){

        $cpf = $this->attributes['cpf'];
        $cpf = str_replace('.', '', $cpf);
        $cpf = str_replace('-', '', $cpf);

        return $cpf;
    }

    public function getRgAttribute(){

        $rg = $this->attributes['rg'];
        $rg = str_replace('.', '', $rg);
        $rg = str_replace('-', '', $rg);

        return $rg;
    }


}
