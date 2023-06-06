<?php

namespace Database\Seeders;

use App\Domain\Administration\Models\Administrator;
use Illuminate\Database\Seeder;

class AdministratorsSeeder extends Seeder
{
    public function run()
    {
        $administrator = new Administrator();
        $administrator->name = 'Administrator';
        $administrator->email = 'hello@mujiz.com';
        $administrator->password = bcrypt('abc12345@');
        $administrator->save();
    }
}
