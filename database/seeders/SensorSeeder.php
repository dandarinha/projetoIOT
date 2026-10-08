<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    public function run(): void
    {
        $ambientes = Ambiente::pluck('id', 'nome');

        $sensores = [
            ['ambiente' => 'Sala 01', 
            'codigo' => 'TEMP01', 
            'tipo' => 'Temperatura', 
            'descricao' => 'Mede a temperatura da sala em °C.', 
            'status' => true],

            ['ambiente' => 'Sala 01', 
            'codigo' => 'UMID01', 
            'tipo' => 'Umidade', 
            'descricao' => 'Monitora a umidade relativa do ar.', 
            'status' => true],
            
            ['ambiente' => 'Sala 02', 
            'codigo' => 'TEMP02', 
            'tipo' => 'Temperatura', 
            'descricao' => 'Mede a temperatura da sala em °C.', 
            'status' => true],


            ['ambiente' => 'Sala dos Professores', 
            'codigo' => 'LUM01', 
            'tipo' => 'Temperatura', 
            'descricao' => 'Mede a temperatura da sala dos professores.', 
            'status' => false],

        ];

        foreach ($sensores as $sensor) {
            Sensor::updateOrCreate(
                ['codigo' => $sensor['codigo']],
                [
                    'ambiente_id' => $ambientes[$sensor['ambiente']],
                    'tipo' => $sensor['tipo'],
                    'descricao' => $sensor['descricao'],
                    'status' => $sensor['status'],
                ],
            );
        }
    }
}