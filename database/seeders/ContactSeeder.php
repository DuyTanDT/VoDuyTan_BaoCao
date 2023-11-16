<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Contact;
class ContactSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Contact::create([
                'name' =>  'brand '.$i,
               'user_id'=>1,
               'email'=>'aaa',
               'phone'=>'aaa',
               'title'=>'ada',
               'content'=>'aa',
               'replay_id'=>1,
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
