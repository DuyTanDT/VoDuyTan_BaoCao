<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Orderdetail;
class OrderdetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++)
        {
           Orderdetail::create([
               'order_id' =>3,
               'product_id' =>2,
               'price'=>100,
               'qty'=>2,
               'amount'=>3,
           ]);
           }
    }
}
