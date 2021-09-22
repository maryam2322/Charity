<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class Permissionseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::query()->insert([
            [
               'title'=>'create-form'
            ] ,
            [
                'title'=>'read-form'
            ] ,
            [
                'title'=>'update-form'
            ] ,
            [
                'title'=>'delete-form'
            ] ,
        ]);

        Permission::query()->insert([
            [
                'title'=>'create-gallery'
            ] ,
            [
                'title'=>'read-gallery'
            ] ,
            [
                'title'=>'update-gallery'
            ] ,
            [
                'title'=>'delete-gallery'
            ] ,
        ]);


        Permission::query()->insert([
            [
                'title'=>'create-user'
            ] ,
            [
                'title'=>'read-user'
            ] ,
            [
                'title'=>'update-user'
            ] ,
            [
                'title'=>'delete-user'
            ] ,
        ]);
        Permission::query()->insert([
            [
                'title'=>'create-post'
            ] ,
            [
                'title'=>'read-post'
            ] ,
            [
                'title'=>'update-post'
            ] ,
            [
                'title'=>'delete-post'
            ] ,
        ]);
        Permission::query()->insert([
            [
                'title'=>'create-role'
            ] ,
            [
                'title'=>'read-role'
            ] ,
            [
                'title'=>'update-role'
            ] ,
            [
                'title'=>'delete-role'
            ] ,
        ]);
    }
}
