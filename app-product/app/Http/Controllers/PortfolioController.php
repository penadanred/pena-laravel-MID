<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'BREW BREW',
            'title' => 'coffee',
            'email' => 'PENADANRED@gmail.com',
            'phone' => '09708469648',
            'location' => 'Manila, APOLINIO SAMSOM',
            'bio' => 'At Brew Haven, we serve freshly brewed coffee and pastries made with love. Our goal is to bring comfort and energy with every cup!',
            'profile_image' => 'https://img.freepik.com/free-photo/top-view-alcohol-bottles-with-copy-space_23-2148673772.jpg',

            // Removed projects
            'skills' => ['Gin', 'Taunday', 'Rum', 'Wine'],

            'testimonials' => [
                ['quote' => 'Best coffee in town! Love the atmosphere.', 'author' => 'Maria G.'],
                ['quote' => 'The cappuccino is always perfect, highly recommend!', 'author' => 'James L.'],
            ],
        ];

        return view('portfolio.index', compact('portfolio'));
    }
}
