<?php

use App\Members;
use App\Notes;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Auth;

class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 50; $i++) {
            DB::table('notes')->insert([
                'date' => '2021-07-18',
                'place' => '味の素スタジアム',
                'opponent' => 'FC東京',
                'match_result_home' => 2,
                'match_result_away' => 0,
                'url' => 'https://bizwind.co.jp/',
                'impressions' => 'テスト',
                'user_id' => 1,
                'formation' => 'four',
                'created_at' => '2021-07-22 07:45:00',
                'updated_at' => '2021-07-22 07:45:00',
            ]);

            $id = DB::table('notes')->latest('id')->first()->id;

            DB::table('members')->insert([
                'member1' => '川島永嗣',
                'member2' => '酒井宏樹',
                'member3' => '吉田麻也',
                'member4' => '冨安健洋',
                'member5' => '長友佑都',
                'member6' => '柴崎岳',
                'member7' => '遠藤航',
                'member8' => '堂安律',
                'member9' => '久保建英',
                'member10' => '三笘薫',
                'member11' => '大迫勇也',
                'member12' => '西川周作',
                'member13' => '室屋成',
                'member14' => '植田直通',
                'member15' => '守田英正',
                'member16' => '伊藤純也',
                'member17' => '本田圭佑',
                'member18' => '岡崎慎司',
                'created_at' => '2021-07-22 07:45:00',
                'updated_at' => '2021-07-22 07:45:00',
                'notes_id' => $id,
            ]);
        }
    }
}
