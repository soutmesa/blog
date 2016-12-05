<?php

use Illuminate\Database\Seeder;
use App\Models\User\User as User; 
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();
        $users = [
            ['name' => 'sotmesa', 'username' => 'mesa', 'role' => 'admin', 'email' => 'soutmesa3@@gmail.com', 'password' => bcrypt('123'), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
            ['name' => 'kimalink', 'username' => 'link', 'role' => 'editor', 'email' => 'kimalink@@gmail.com', 'password' => bcrypt('123'), 'created_at' => date("Y-m-d H:i:s"), 'updated_at' => date("Y-m-d H:i:s")],
        ];
        DB::table('users')->insert($users);
    }
}
