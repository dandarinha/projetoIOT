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
<<<<<<< HEAD
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

=======
            ['ambiente' => 'Sala 01 - 1º Ano', 'codigo' => 'TMP-S01-001', 'tipo' => 'Temperatura', 'descricao' => 'Mede a temperatura da sala em graus Celsius.', 'status' => true],
            ['ambiente' => 'Sala 01 - 1º Ano', 'codigo' => 'UMD-S01-001', 'tipo' => 'Umidade', 'descricao' => 'Monitora a umidade relativa do ar.', 'status' => true],
            ['ambiente' => 'Sala 02 - 5º Ano', 'codigo' => 'TMP-S02-001', 'tipo' => 'Temperatura', 'descricao' => 'Mede a temperatura da sala em graus Celsius.', 'status' => true],
            ['ambiente' => 'Laboratório de Informática', 'codigo' => 'CO2-LAB-001', 'tipo' => 'Qualidade do ar', 'descricao' => 'Acompanha a concentração de CO2 no laboratório.', 'status' => true],
            ['ambiente' => 'Laboratório de Informática', 'codigo' => 'PRE-LAB-001', 'tipo' => 'Presença', 'descricao' => 'Detecta movimentação no ambiente.', 'status' => true],
            ['ambiente' => 'Biblioteca', 'codigo' => 'RUD-BIB-001', 'tipo' => 'Ruído', 'descricao' => 'Monitora o nível sonoro do espaço de leitura.', 'status' => true],
            ['ambiente' => 'Pátio', 'codigo' => 'PRE-PAT-001', 'tipo' => 'Presença', 'descricao' => 'Detecta movimentação no pátio.', 'status' => true],
            ['ambiente' => 'Sala dos Professores', 'codigo' => 'TMP-PRO-001', 'tipo' => 'Temperatura', 'descricao' => 'Mede a temperatura da sala dos professores.', 'status' => false],
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
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
<<<<<<< HEAD
}
=======
}
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
