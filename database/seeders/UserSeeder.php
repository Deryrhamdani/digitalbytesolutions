<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Ramsey\Uuid\Uuid;

class UserSeeder extends Seeder
{
  /**
   * Run the database seeds.
   *
   * @return void
   */
  public function run()
  {
    $users = [
      [
        'uuid' => Uuid::uuid4()->toString(),
        'name' => 'Muhammad Jafar Shodiq',
        'username' => 'jafar',
        'email' => 'jafar@admin.com',
        'role' => 'admin',
        'password' => bcrypt('123'),
        'is_active' => 1,
      ],
    ];

    foreach ($users as $user) {
      $user['created_at'] = Carbon::now();
      $user['updated_at'] = Carbon::now();
      $user['created_by'] = $user['uuid'];
      $user['updated_by'] = $user['uuid'];
      DB::table('users')->insert($user);
    }
  }
}
