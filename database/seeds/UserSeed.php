<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Factory as Faker;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create('id_ID');

        for ($i=0;$i<=5;$i++){
            user::create([
                'name'=>$faker->name->unique(),
                'email'=>$faker->email,
                'password'=>bcrypt('secret'),
            ]);
        }
    }
}
