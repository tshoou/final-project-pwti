<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class LoginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $login = [
            [
                //admin
                'id_pegawai' => '882761711',
                'nip' => '215150601111001',
                'id_golongan' => '1',
                'password' => Hash::make('passadmin'),
            ],
            [
                //resepsionis
                'id_pegawai' => '617524901',
                'nip' => '215150600111002',
                'id_golongan' => '2',
                'password' => Hash::make('passresepsionis'),
            ],
            [
                //dokter
                'id_pegawai' => '617524965',
                'nip' => '215150600111003',
                'id_golongan' => '3',
                'password' => Hash::make('passdokter'),
            ],
            //kasir
            [
                'id_pegawai' => '617524944',
                'nip' => '15150600111004',
                'id_golongan' => '4',
                'password' => Hash::make('paksi123'),
            ],
        ];

        foreach ($login as $key => $value) {
            User::create($value);
        }
    }
}
