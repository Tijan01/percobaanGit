<?php

namespace App\Controllers;

use App\Models\DeviceModel;

class Komik extends BaseController
{
    protected $deviceModel;

    public function __construct(){
        $this->deviceModel = new DeviceModel();
    }

    public function index()
    {
        //$device = $this ->deviceModel-> findAll();
        
        $data = [
            'title' => 'List Barang',
            'device' => $this ->deviceModel->getModel()
        ];
  
        return view('komik/index', $data);
        
    }
    public function detail($slug){

        $data = [
            'title' => 'Detail Barang',
            'device' => $this->deviceModel->getModel($slug)
        ];
  
        return view('komik/detail', $data);
    
       // echo$slug;
    }

}
