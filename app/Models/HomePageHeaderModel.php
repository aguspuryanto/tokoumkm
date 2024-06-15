<?php

namespace App\Models;

use CodeIgniter\Model;

class HomePageHeaderModel extends Model
{
    protected $table = 'homepage_header';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'description', 'favicon', 'logo', 'color', 'tampil'];
    protected $useTimestamps = true;
}
