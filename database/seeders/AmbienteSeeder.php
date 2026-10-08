<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use Illuminate\Database\Seeder;

class AmbienteSeeder extends Seeder
{
    public function run(): void
    {
        $ambientes = [
            ['nome' => 'Sala 01 - 1º Ano', 'descricao' => 'Sala de aula do primeiro ano do ensino fundamental.', 'status' => true],
            ['nome' => 'Sala 02 - 5º Ano', 'descricao' => 'Sala de aula do quinto ano do ensino fundamental.', 'status' => true],
            ['nome' => 'Laboratório de Informática', 'descricao' => 'Ambiente com computadores para aulas práticas e projetos.', 'status' => true],
            ['nome' => 'Biblioteca', 'descricao' => 'Espaço de leitura e estudo da escola.', 'status' => true],
            ['nome' => 'Pátio', 'descricao' => 'Área comum para recreio, eventos e circulação.', 'status' => true],
            ['nome' => 'Sala dos Professores', 'descricao' => 'Ambiente reservado para planejamento e reuniões docentes.', 'status' => false],
        ];

        foreach ($ambientes as $ambiente) {
            Ambiente::updateOrCreate(['nome' => $ambiente['nome']], $ambiente);
        }
    }
}
