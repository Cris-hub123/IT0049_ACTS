<?php
namespace App\Controllers;
class Customers extends BaseController
{
    public function index()
    {
        $customers = [
            [
                'full_name' => 'Franz Matthew Quevedo',
                'email' => 'franz.matt@gmail.com',
                'phone' => '0917 123 4567',
            ],
            [
                'full_name' => 'Alya Salome Salcedo',
                'email' => 'alya.salome@gmail.com',
                'phone' => '0918 234 5678',
            ],
            [
                'full_name' => 'Axel Solomon Salcedo',
                'email' => 'axel.solomon@gmail.com',
                'phone' => '0919 345 6789',
            ],
            [
                'full_name' => 'Leighan Mike Cadag',
                'email' => 'leigh.mike@gmail.com',
                'phone' => '0920 456 7890',
            ],
            [
                'full_name' => 'Ana Marie Arellano',
                'email' => 'eiram.ana@gmail.com',
                'phone' => '0921 567 8901',
            ],
        ];
        return view('customers/index', [
            'title' => 'Customer Accounts',
            'activePage' => 'customers',
            'customers' => $customers,
        ]);
    }
}