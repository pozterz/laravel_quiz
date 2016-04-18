<?php

use Illuminate\Database\Seeder;
use App\Rabbit;
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call(RabbitTableSeeder::class);
    }
}
class RabbitTableSeeder  extends Seeder {
    public function run() {
        Rabbit::truncate();
        factory(Rabbit::class,12)->create();
    }
}