<?php

namespace Database\Seeders;

use App\Models\Company;
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
        $company = Company::factory()->create([
            'slug' => 'freshair',
            'name' => '嘉兴控股',
        ]);

        $user = User::factory()->create([
            'name'       => '张雪雪',
            'email'      => 'demo@demo.com',
            'company_id' => $company->id,
        ]);

        $user->companies()->attach($company, [
            'role' => 'admin',
        ]);
    }
}
