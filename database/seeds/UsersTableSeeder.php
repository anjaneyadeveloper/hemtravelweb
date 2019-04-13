<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::where('name', 'admin')->first();
        $role_employee = Role::where('name', 'employee')->first();
        $role_manager  = Role::where('name', 'manager')->first();

        $admin = new User();
        $admin->name = 'Admin';
        $admin->email = 'admin@mail.com';
        $admin->password = bcrypt('password@789');
        $admin->save();
        $admin->roles()->attach($role_admin);

        $employee = new User();
        $employee->name = 'Employee';
        $employee->email = 'employee@mail.com';
        $employee->password = bcrypt('password@789');
        $employee->save();
        $employee->roles()->attach($role_employee);

        $manager = new User();
        $manager->name = 'Manager';
        $manager->email = 'manager@mail.com';
        $manager->password = bcrypt('password@789');
        $manager->save();
        $manager->roles()->attach($role_manager);

    }
}
