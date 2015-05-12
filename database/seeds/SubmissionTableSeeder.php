<?php
 
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class SubmissionTableSeeder extends Seeder {
 
    public function run()
    {
        DB::table('submissions')->delete();
 

        DB::table('submissions')->insert(array(

            array(

                'fb_id' => '123213123123123',
                'fb_token' => '2222222222222',
                'f_name' => 'first name',
                'l_name' => 'last name',
                'address' => 'somewhere in nowhere',
                'email' => 'test@test.com',
                'mobile' => '123123123',
                'country' => 'sg',
                'answer_1' => 'answer 1',
                'answer_2' => 'answer 2',
                'answer_3' => 'answer 3',
                'answer_4' => 'answer 4',
                'visit' => '1'
                )
        ));
 
    }
 
}