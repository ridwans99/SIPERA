<?php

namespace App\Models;

use CodeIgniter\Model;

class BarangModel extends Model
{
    // protected $table = 'users';
    // protected $primaryKey = 'user_id';
    // protected $useTimestamps = true;

    public function __construct()
    {
        $this->db = db_connect();
    }

    public function tampildata()
    {
        return $this->db->table('barangs')->get();
    }
}
