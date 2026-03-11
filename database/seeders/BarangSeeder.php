<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */


    public function run(): void
    {
        $data = [];
        $id = 1;

        for ($supplier = 1; $supplier <= 3; $supplier++) {
            for ($i = 1; $i <= 5; $i++) {
                $data[] = [
                    'barang_id' => $id,
                    'kategori_id' => $i,
                    'supplier_id' => $supplier,
                    'barang_kode' => 'BRG' . $id,
                    'barang_nama' => 'Barang ' . $id,
                    'harga_beli' => 10000,
                    'harga_jual' => 15000
                ];
                $id++;
            }
        }

        DB::table('m_barang')->insert($data);
    }
}
