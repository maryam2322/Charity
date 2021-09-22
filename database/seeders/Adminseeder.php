<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
class Adminseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $admin=Role::query()->create([
          'title'=>'admin'
      ]);
      $admin->Permissions()->attach(Permission::all());
      User::query()->insert([
        'role_id'=>$admin->id,
          'name'=>'maryam',
          'nationalCode'=>'0022390219',
          'email'=>'maryrezayee78@gmail.com',
          'phone'=>'09214875148',
          'password'=>bcrypt('12345')

      ]);
    }
}
