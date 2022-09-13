<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use CodeIgniter\I18n\Time;

class Mahasiswa extends Seeder
{
    public function run()
    {
        $data_mahasiswa = [
            [
                ' npm' => '2017051053',
                'nama'    => 'Rendy Lutfi Prabowo',
                'alamat'    => 'Prabumulih',
                'created_at'    => Time::now()
            ],
            [
                ' npm' => '2017051083',
                'nama'    => 'Deny Aldy .A',
                'alamat'    => 'Waykanan',
                'created_at'    => Time::now()
            ],
            [
                ' npm' => '2017051023',
                'nama'    => 'Satria Sapta',
                'alamat'    => 'Kota Metro',
                'created_at'    => Time::now()
            ],
        ];

        // Simple Queries
        //$this->db->query('INSERT INTO mahasiswa (npm, nama, alamat, created_at) VALUES (:npm:, :nama:, :alamat:, :created_at:)', $data);

        // Using Query Builder
        foreach ($data_mahasiswa as $data) {
            $this->db->table('mahasiswa')->insert($data);
        }
    }
}
