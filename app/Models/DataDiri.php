<?php

namespace App\Models;

use CodeIgniter\Model;

class DataDiri extends Model
{
    protected $table = 'datadiri';
    protected $allowedFields = ['nama', 'npm', 'prodi', 'alamat', 'agama'];
}