<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {
    $data = [
      'title' => "Novaldy Home Page"
    ];
    return view('pages/home', $data);
  }
  public function about($nama = 'Mochamad Novaldy', $umur = 20)
  {
    $data = [
      'title' => "About Me",
      'nama' => $nama,
      'umur' => $umur
    ];
    return view('pages/about', $data);
  }
  public function contact()
  {
    $data = [
      'title' => "Contact Us",
      'alamat' => [
        [
          'tipe' => '08889398304',
          'alamat' => 'Kp.Babakansoka Rt 01/06',
          'kota' => 'Cianjur'
        ],
        [
          'tipe' => 'Universitas Pasundan',
          'alamat' => 'Jl. Dr Setiabudi No.193',
          'kota' => 'Bandung'
        ]
      ]
    ];
    return view('pages/contact', $data);
  }
}
