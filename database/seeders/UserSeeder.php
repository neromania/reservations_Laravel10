<?php

namespace Database\Seeders;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();

        $users = [
            [
                'login'=>'bob',
                'firstname'=>'Bob',
                'lastname'=>'Sull',
                'email'=>'bob@sull.com',
                'password'=>'12345678',
                'langue'=>'fr',
                'created_at'=>'',
                'role'=>'admin',
            ],
            [
                'login'=>'anna',
                'firstname'=>'Anna',
                'lastname'=>'Lyse',
                'email'=>'anna.lyse@sull.com',
                'password'=>'12345678',
                'langue'=>'en',
                'created_at'=>'',
                'role'=>'member',
            ],
        ];

        foreach ($users as &$user) {
            $user['created_at'] = Carbon::now()->toDateTimeString(); //formatage complet date et heure
            $user['password'] = Hash::make($user['password']);
        }
        DB::table('users')->insert($users);
    }
}
