<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Permissions yaratish
        $permissions = [
            'create posts',
            'read posts',
            'edit posts',
            'delete posts',
        ];

        foreach ($permissions as $permissionName) {
            Permission::firstOrCreate(['name' => $permissionName, 'guard_name' => 'web']);
        }

        // Rol yaratish va permissions berish
        $role = Role::firstOrCreate(['name' => 'editor', 'guard_name' => 'web']);
        $role->givePermissionTo(['create posts', 'read posts', 'edit posts']);

        $viewerRole = Role::firstOrCreate(['name' => 'viewer', 'guard_name' => 'web']);
        $viewerRole->givePermissionTo('read posts');

        // Admin rol
        $adminRole = Role::firstOrCreate(['name' => 'admin', 'guard_name' => 'web']);
        $adminRole->givePermissionTo(Permission::all());

        // Userlar yaratish
        $user = User::firstOrCreate([
            'email' => 'test@example.com',
        ], [
            'name' => 'Test User',
            'password' => bcrypt('password'),
        ]);
        $user->assignRole('editor');

        $viewerUser = User::firstOrCreate([
            'email' => 'viewer@example.com',
        ], [
            'name' => 'Viewer User',
            'password' => bcrypt('password'),
        ]);
        $viewerUser->assignRole('viewer');

        // auth()->logout(); // Bu seederda ishlamaydi, chunki auth web uchun
    }
}
