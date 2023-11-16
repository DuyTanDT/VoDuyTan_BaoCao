<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Topic;
class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         for($i=1;$i<=10;$i++){
            Topic::insert([
                'name' =>  'topic '.$i,
                'slug' => 'tan',
                'parent_id'=>1,
                'metakey' => 'acaca',
                'metadesc' => 'acac',
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now(),
                'status'=>1
            ]);
        }
    }
}
