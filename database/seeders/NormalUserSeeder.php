<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Seeder;

class NormalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $normaluser=Role::query()->create([
            'title'=>'normal user'
        ]);
        $permissions=Permission::query()
            ->whereIn('title',[
            'create-form',
            'read-post',
            'read-gallery',
        ])
            ->get();
        $normaluser->permissions()->attach($permissions);
    }
}
