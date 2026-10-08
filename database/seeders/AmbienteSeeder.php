<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    public function run(): void
    {
        $ambientes = [
            ['nome' => 'Sala 01', 
            'descricao' => 'Sala de aula', 
            'status' => true],

            ['nome' => 'Sala 02', 
            'descricao' => 'Sala de aula.
            ', 'status' => true],

            ['nome' => 'Laboratório', 
            'descricao' => 'Espaço de aulas práticas', 
            'status' => true],

            ['nome' => 'Biblioteca', 
            'descricao' => 'Espaço de leitura.', 
            'status' => true],

            ['nome' => 'Refeitório', 
            'descricao' => 'Área de alimentação.', 
            'status' => true],
            
            ['nome' => 'Sala dos Professores', 
            'descricao' => 'Ambiente reservado para planejamento e reuniões docentes.', 
            'status' => false],
        ];

        foreach ($ambientes as $ambiente) {
            Ambiente::updateOrCreate(['nome' => $ambiente['nome']], $ambiente);
        }
    }
}