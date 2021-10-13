<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seller;
class SellerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
          Seller::updateOrCreate([
            'name' => 'iftekhar',
            'email' => 'seller@gmail.com',
            'email_verified_at' => now(),
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
            'remember_token' => '92IXUNpkjO0rOQ5byMi'
        ]);
    }
}
