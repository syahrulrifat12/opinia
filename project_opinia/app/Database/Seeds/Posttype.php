<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Posttype extends Seeder
{
    public function run()
    {
        // membuat data
        $news_data = [
            [
                'Jenis' => 'Opini',
                'Type'  => 'Artikel'

            ],
            [
                'Jenis' => 'Cerpen',
                'Type'  => 'Artikel'
            ],
            [
                'Jenis' => 'Idea',
                'Type'  => 'Idea'
            ],
            [
                'Jenis' => 'Esai',
                'Type'  => 'Artikel'
            ]

        ];

        foreach ($news_data as $data) {
            // insert semua data ke tabel
            $this->db->table('posttype')->insert($data);
        }
    }
}
