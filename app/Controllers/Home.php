<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title' => 'Praktikum-8'
        ];
        return view('pages/penjelasan', $data);
        
    }
    public function devicedetail()
    {   
        $data=[
            'title' => 'Divece Details'
        ];
        return view('pages/devicedetail', $data);
        
    }
    public function contact()
    {
        $data =[
            'title' => 'Contact Us',
            'data' => [
                [
                    'Nama' => 'Muhamamd Tijan Abdurrahman',
                    'NIM' => '105220023',
                    'Universitas' => 'Universitas Pertamina'
                ],
                [
                    'Nama' => 'Muhamamd Tijan Abdurrahman',
                    'NIM' => '105220023',
                    'Universitas' => 'Universitas Pertamina'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
    public function home()
    {
        $data=[
            'title' => 'Home'
        ];
        return view('pages/home', $data);
        
    }
}
