<?php

use Illuminate\Database\Seeder;

use App\task;
use App\employee;

class taskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(task::class, 10) -> make() -> each(function($task) {
       $employee = employee::inRandomOrder() -> first();
       $task -> employee_id = $employee -> id;
       $task -> save();
       });
    }
}
