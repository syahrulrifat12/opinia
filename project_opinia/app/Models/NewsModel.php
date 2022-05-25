<?php

namespace App\Models;

use CodeIgniter\Model;

class NewsModel extends Model
{
    protected $table      = 'news';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;
    protected $allowedFields = ['title', 'content', 'status', 'author', 'slug'];

    // public function getSimpanan()
    // {
    //     $query =  $this->db->table('news')
    //         ->join('posttype', 'news.id = posttype.id')
    //         ->get();
    //     return $query;
    // }
}
