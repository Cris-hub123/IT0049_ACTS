<?php
namespace App\Controllers;
class Pages extends BaseController
{
    public function index()
    {
        return view('pages/home', [
            'title' => 'Point-of-Sale Home',
            'activePage' => 'home',
        ]);
    }
    public function about()
    {
        return view('pages/about', [
            'title' => 'About the Point-of-Sale System',
            'activePage' => 'about',
        ]);
    }
}