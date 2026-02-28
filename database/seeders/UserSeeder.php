<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();

        $user->name = 'Admin Istrator';
        $user->email = 'admin.istrator@company.com';
        $user->password = Hash::make('12345');
        $user->admin = true;
        $user->save();
    }
}
