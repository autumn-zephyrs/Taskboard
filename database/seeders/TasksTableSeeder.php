<?php
namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Crypt;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'user' => 1,
            'title' => 'Add more tasks',
            'data' =>  Crypt::encryptString('The system requires more tasks to be added, and these need to be entered into the system'),
            'completed' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'user' => 1,
            'title' => 'Clean up',
            'data' => Crypt::encryptString('The office is currently messy and needs to be cleaned up so that it looks nice'),
            'completed' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('tasks')->insert([
            'user' => 1,
            'title' => 'Buy milk',
            'data' => Crypt::encryptString('There is currently no milk in the fridge, and this should ideally be replenished'),
            'completed' => 0,
            'created_at' => now(),
            'updated_at' => now()
        ]);

    }
}
