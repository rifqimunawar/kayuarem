<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
  /**
   * Seed the application's database.
   */
  public function run() : void
  {
    // User::create([
    //   'name' => 'Admin User',
    //   'username' => 'admin',
    //   'email' => 'admin@gmail.com',
    //   'password' => Hash::make('admin123'),
    //   'email_verified_at' => now(),
    // ]);
    $this->call(UsersTableSeeder::class);
    $this->call(HomesTableSeeder::class);
    $this->call(AboutsTableSeeder::class);
    $this->call(TestimonialsTableSeeder::class);
    $this->call(ProductsTableSeeder::class);
    $this->call(ServicesTableSeeder::class);
    $this->call(TeamsTableSeeder::class);
    $this->call(CategoriProductsTableSeeder::class);
    $this->call(NewsTableSeeder::class);
    $this->call(CategoriNewsTableSeeder::class);
    $this->call(QuotesTableSeeder::class);
    $this->call(ContactsTableSeeder::class);
    $this->call(CategoriProjectsTableSeeder::class);
    $this->call(ProjectsTableSeeder::class);
    $this->call(SitesTableSeeder::class);
  }
}
