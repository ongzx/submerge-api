<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CampaignTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('campaign')->delete();
 

        DB::table('campaign')->insert(array(

            array(

                'start_date' => '2015-12-10',
                'question_index' => 1
                )
        ));
 
    }
 
}