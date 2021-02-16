<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Historico;
use GuzzleHttp\Psr7\Request;

class Balanco extends Model
{
    use HasFactory;

    public function balanco($value){
        $totalAntes = $this->montante;
        $totalDepois = $this->montante += number_format($value, 2);
        $deposito = $this->save();
        $historico = auth()->user()->historico()->create([
             'type'                  => 'I',
             'montante'              => $value,
             'total_antes'           => $totalAntes,
             'total_depois'          => $totalDepois,
        ]);

            if($deposito && $historico)
            return [
                'success' => true,
                'message'  => 'Sucesso ao depositar!'
            ];
            return [
                'success' => false,
                'message' => 'Falha ao depositar!'
            ];
            
    }
}

