<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        $portfolio = [
            'name' => 'Global Reciprocal Colleges',
            'title' => 'GSITE',
            'email' => 'globalreciprocalcolleges@gmail.com',
            'phone' => '09708469648',
            'location' => 'Grace Park, Caloocan City',
            'bio' => 'Global Reciprocal Colleges’ Graduation Day 2025
Events / Global Reciprocal Colleges
Global Reciprocal Colleges’ Graduation Day 2025 The 13th Global Reciprocal Colleges Commencement Exercises were held on July 24, 2025, at the University of the Philippines, Quezon City, marking a significant milestone for both the graduating class and the institution. With the theme “Transformed to Lead, Committed to Reciprocate,” the event celebrated not only academic achievement






GRC Sportsfest 2024
Events / Global Reciprocal Colleges
The Global Reciprocal Colleges (GRC) hosted its much-awaited Sports Festival from April 24–26, 2024, where students from various colleges within the organization demonstrated their athletic abilities and spirit of competition. The event, which took place across different venues, witnessed an impressive display of skill and camaraderie among participants. Divided into two main categories, indoor and





GRC Camp 2024 @ Highlands Iba, Zambales
Events / Global Reciprocal Colleges
DIVERGENT: Know your way Nestled amidst the serene beauty of the Iba Zambales Highlands, Camp 2024 sponsored by Global Surge Camps unfolded its doors to students of all year levels on March 22nd and 23rd, 2024. With a total of 1,300 participants, including students and facilitators from various backgrounds such as professors, admin staff, and
',
             
            




            'profile_image' => 'https://tse2.mm.bing.net/th/id/OIP.0iarJstj-emHi_kreOEv7AHaEo?rs=1&pid=ImgDetMain&o=7&rm=3',

            // Removed projects
            'skills' => ['Photoshop', 'Html', 'c#', 'github'],

            'testimonials' => [
                ['quote' => 'Best School in Caloocan ! Love the atmosphere.', 'author' => 'Maria G.'],
                ['quote' => 'The Professor is always kind , highly recommend!', 'author' => 'James L.'],
            ],
        ];

        return view('portfolio.index', compact('portfolio'));
    }
}
