<?php

namespace App\Models;

use CodeIgniter\Model;

class DeviceModel extends Model
{
    protected $table = 'divice';
    protected $useTimestamps = true;

    public function getModel($slug=false){
        if ($slug == false) {
            return $this->findAll();
            # code...
        }

        return $this->where(['slug' => $slug])->first();
    }
}
