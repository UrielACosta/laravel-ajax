<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        DB::table('users')->delete();

        $user = new User();
        $user->name = 'Administrador';
        $user->username = 'admin';
        $user->email = 'admin@bhvp.com.br';
        $user->password = bcrypt('admin');
        $user->save();
        $user->assignRole('Admin');
        $this->command->info('User Admin created!');
        
    }
}
