<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\Spu;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user = User::factory()->create([
            'email' => 'demo@demo.com',
        ]);

        $company = Company::factory()->create([
            'slug' => 'freshair',
            'name' => 'Fresh air',
        ]);

        $user->companies()->attach($company, [
            'role' => 'admin',
        ]);

        Spu::create([
            'name'       => '空调清洗',
            'company_id' => $company->id,
        ]);

        Spu::create([
            'name'       => '打扫卫生',
            'company_id' => $company->id,
        ]);
    }
}
