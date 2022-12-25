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
            'name' => 'Fresh air',
        ]);

        $user = User::factory()->create([
            'email'      => 'demo@demo.com',
            'company_id' => $company->id,
        ]);

        $user->companies()->attach($company, [
            'role' => 'admin',
        ]);
    }
}
