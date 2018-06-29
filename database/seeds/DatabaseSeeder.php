<?php

use Illuminate\Database\Seeder;
use App\Entities\User;

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
        User::create([
            'cpf'           => '11122233344',
            'name'          => 'João', 
            'phone'         => '1122223333', 
            'birth'         => '1990-10-01', 
            'gender'        => 'M', 
            'email'         => 'joao@email.com', 
            'password'      =>  bcrypt('joao123'), 
        ]);
    }
}
