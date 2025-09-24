<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        // Website data for Alcohol/Drinks theme
        $portfolio = [
            'name' => 'Drink Haven',
            'title' => 'Premium Alcohol & Beverages',
            'email' => 'info@drinkhaven.com',
            'phone' => '+639074562134',
            'location' => 'PH, Manila',
            'bio' => 'Discover the finest collection of wines, beers, and spirits. Curated for every occasion.',
            'profile_image' => 'https://via.placeholder.com/300x300?text=Drink+Logo',

            'skills' => ['Whiskey', 'Wine', 'Cocktails', 'Craft Beer', 'Champagne'],

            'projects' => [
                [
                    'title' => 'Top 10 Whiskey Picks',
                    'description' => 'A curated list of our most loved whiskeys this year.',
                    'url' => '#',
                ],
                [
                    'title' => 'Wine Pairing Guide',
                    'description' => 'Find the perfect wine for every meal.',
                    'url' => '#',
                ],
            ],

            'experience' => [], // Not needed unless you want to show business history
            'education' => [],  // Not needed for a product site
            'social_links' => [
                'facebook' => 'https://facebook.com/drinkhaven',
                'instagram' => 'https://instagram.com/drinkhaven',
            ],
        ];

        return view('portfolio.index', compact('portfolio'));
    }
}
