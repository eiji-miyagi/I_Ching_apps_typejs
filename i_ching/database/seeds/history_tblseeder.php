<?php

use Illuminate\Database\Seeder;

class history_tblseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('history_tbl')->insert([
              'id_h'=>'2'
                'question'=>'テスト'
                'koji_no'=>'380'
                'create_date'=>'0'

            ],
        );

}
