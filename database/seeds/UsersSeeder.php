<?php

//namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    public function run()
    {
        $count = User::all()->count();

        if ($count == 0) {
            echo 'create user';

            $user = User::create([
                'name' => 'Renato',
                'email' => 'cpdrenato@gmail.com',
                'password' => bcrypt('password'), //'password' => bcrypt(Str::random(15)),
            ]);
        } else {
            echo "Qtde: " . $count . " Records Inside Database!";
        }
    }

}
