<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
class PostSeeder extends Seeder
{
  
    public function run(): void
    {
        for($i=1;$i<=10;$i++){
            Post::create([
                'topic_id' => 1,
                'title' => 'Tiêu đề bài viết 1',
                'detail' => 'Nội dung bài viết 1',
                'type' => 1,
                'image' => 'hinhanh.jpg',
                'slug' => 'tan',
                'metakey' => 'acaca',
                'metadesc' => 'acac',
                'created_by' => 1,
                'updated_by' => 3,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
