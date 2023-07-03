<?php

namespace App\Models;

use CodeIgniter\Model;
use CodeIgniter\Database\ConnectionInterface;

class photoModel extends Model
{
    protected $table = 'gallery';
    protected $useTimestamps = true;
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul',
        'slug',
        'kategori',
        'deskripsi',
        'sampul'
    ];

    public function getPhoto($slug = false)
    {
        if ($slug == false) {
            return $this->findAll();
        }

        return $this->where(['slug' => $slug])->first();
    }

    function addphoto($data)
    {
        return $this->db
            ->table('gallery')
            ->insert($data);
    }
}
