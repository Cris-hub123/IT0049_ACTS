<?php
namespace App\Controllers;
class Users extends BaseController
{
    public function index()
    {
        $users = [
            [
                'username' => 'admin',
                'full_name' => 'Criscana Cadag',
                'role' => 'Administrator',
            ],
            [
                'username' => 'cashier1',
                'full_name' => 'Angelica Salcedo',
                'role' => 'Cashier',
            ],
            [
                'username' => 'cashier2',
                'full_name' => 'Benjie Salcedo',
                'role' => 'Cashier',
            ],
            [
                'username' => 'inventory',
                'full_name' => 'Hipolito Villapando',
                'role' => 'Inventory Staff',
            ],
            [
                'username' => 'manager',
                'full_name' => 'Rosemarie Arellano',
                'role' => 'Store Manager',
            ],
        ];
        return view('users/index', [
            'title' => 'User Accounts',
            'activePage' => 'users',
            'users' => $users,
        ]);
    }
}