<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        $user = new User();
        $user->username = 'tyler';
        $user->password = Hash::make('tyler');
        $user->name = 'Phạm Hải Dương';
        $user->save();
    }
}
