<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EdulevelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('edulevels')->insert([
            [
                'nama'  => 'Playground',
                'ket'   => 'TK / Paud',
            ],
            [
                'nama'  => 'SD Sederajat',
                'ket'   => 'SD / MI',
            ],
            [
                'nama'  => 'SMP Sedejarat',
                'ket'   => 'SMP / MTs',
            ],
            [
                'nama'  => 'SMA Sederajat',
                'ket'   => 'SMA / MA',
            ],
        ]);
    }
}
