<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate(); 
        $this->createAdmin();
    }
    private function createAdmin(){
        User::create([
            'email'=> 'admin@example.com',
            'name' => 'admin',
            'password'=>'$2y$10$aRyOXBNu6ffrTTZkx5tC0edWr7Mr/sdQdbiZfpLYCIMggTPndi7PO'
        ]);
    }
}
