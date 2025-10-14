<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Lista de projetos que vamos exibir na página
        $projects = [
            [
                'image' => 'https://via.placeholder.com/400x250', // Substitua pela URL da imagem do seu projeto
                'title' => 'Travelgram',
                'description' => 'Rede social onde as pessoas mostram os registros de suas viagens pelo mundo.',
                'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript']
            ],
            [
                'image' => 'https://via.placeholder.com/400x250',
                'title' => 'Página de receita',
                'description' => 'Página com o passo a passo de uma receita para cupcakes.',
                'tags' => ['PHP', 'CSS', 'HTML', 'JavaScript']
            ],
            // Adicione quantos projetos quiser aqui...
        ];

        return view('portfolio', ['projects' => $projects]); // Passa a variável $projects para a view
    }
}
