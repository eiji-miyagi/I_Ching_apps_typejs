<?php

use Illuminate\Database\Seeder;

class oraclesseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oracles')->insert([
            [   'id' => 1,

                'keji_name'=> '第1卦',

                'keji_detail'=> '第１卦　乾、天の運行は剛健積極、一瞬もやむことがない。君子はこの卦象を見て、一瞬も気を緩めぬよう努め励むのである。',

                'keji1_img_path'=> '/img/jpg/icon_hakke1',
            
                'keji2_img_path'=> '/img/jpg/icon_hakke1'

            ],
            [
                'id' => 2,

                'keji_name'=> '第2卦',

                'keji_detail'=> '第２卦　坤、大地の動き、これが坤である。君子はこの卦象を見て、徳を厚くして、万民を包容してゆく。',

                'keji1_img_path'=> '/img/jpg/icon_hakke6',
        
                'keji2_img_path'=> '/img/jpg/icon_hakke6'

        ],
        ]);
    }
}
