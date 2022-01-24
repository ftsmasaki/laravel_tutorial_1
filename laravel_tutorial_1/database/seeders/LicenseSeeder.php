<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LicenseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //テーブルのクリア
        DB::table('licenses')->truncate();

        //初期データ用意
        $licenses = [
            ['product_name' => 'ESET',
            'product_key' => '123-456789',
            'expire_date' => '2022-03-01',
            'purchase_date' => '2022-01-19',
            'is_notify' => 0],

            ['product_name' => 'Avast',
            'product_key' => '456-789123',
            'expire_date' => '2022-01-31',
            'purchase_date' => '2022-01-19',
            'is_notify' => 1],
        ];

        //登録
        foreach($licenses as $license) {
            \App\Models\License::create($license);
        }
    }
}
