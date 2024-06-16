<?php

namespace App\Models;

use CodeIgniter\Model;

class HomePageFooterSosmedModel extends Model
{
    protected $table            = 'homepage_footer_sosmed';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['link_facebook', 'link_instagram', 'link_youtube', 'link_tokopedia', 'link_shopee', 'link_lazada', 'link_tiktok', 'tampil_facebook', 'tampil_instagram', 'tampil_tiktok', 'tampil_youtube', 'tampil_tokopedia', 'tampil_shopee', 'tampil_lazada'];

    protected bool $allowEmptyInserts = false;

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
