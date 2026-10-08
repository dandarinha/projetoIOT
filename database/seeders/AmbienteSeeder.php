<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    public function run(): void
    {
        $ambientes = [
<<<<<<< HEAD
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
=======
            ['nome' => 'Sala 01 - 1º Ano', 'descricao' => 'Sala de aula do primeiro ano do ensino fundamental.', 'status' => true],
            ['nome' => 'Sala 02 - 5º Ano', 'descricao' => 'Sala de aula do quinto ano do ensino fundamental.', 'status' => true],
            ['nome' => 'Laboratório de Informática', 'descricao' => 'Ambiente com computadores para aulas práticas e projetos.', 'status' => true],
            ['nome' => 'Biblioteca', 'descricao' => 'Espaço de leitura e estudo da escola.', 'status' => true],
            ['nome' => 'Pátio', 'descricao' => 'Área comum para recreio, eventos e circulação.', 'status' => true],
            ['nome' => 'Sala dos Professores', 'descricao' => 'Ambiente reservado para planejamento e reuniões docentes.', 'status' => false],
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
        ];

        foreach ($ambientes as $ambiente) {
            Ambiente::updateOrCreate(['nome' => $ambiente['nome']], $ambiente);
        }
    }
<<<<<<< HEAD
}
=======
}
>>>>>>> 6f2a0da7f629a084895bc1f44b04a1197587d6b0
