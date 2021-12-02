<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = new User();

        $admin->name = "İbrahim EFE";
        $admin->email = "ibrahim.efee@hotmail.com";
        $admin->password = bcrypt(102030);
        $admin->save();
    }
}
