<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class PostType extends Migration
{
    public function up()
    {
        // Membuat kolom/field untuk tabel news
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 11,
                'unsigned'       => true,
                'auto_increment' => true
            ],
            'Jenis'          => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',

            ],
            'Type'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],

        ]);

        // Membuat primary key
        $this->forge->addKey('id', TRUE);

        // Membuat tabel news
        $this->forge->createTable('posttype', TRUE);
    }

    public function down()
    {
        //

        $this->forge->dropTable('posttype');
    }
}
