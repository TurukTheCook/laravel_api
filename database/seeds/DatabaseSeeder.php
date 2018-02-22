<?php

use App\Model\Employee;
use App\Model\Client;
use App\Model\Appointment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(App\Model\Employee::class, 5)->create();
        factory(App\Model\Client::class, 25)->create();
        factory(App\Model\Appointment::class,100)->create();
    }
}
