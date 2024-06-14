<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\Record;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'brauer@faktor-e.de',
            'is_admin' => true
        ]);

        User::factory(9)->create();

        Customer::factory(50)->create();

        $categories = ['Anwendungen', 'FTP', 'SSH', 'SQL', 'TYPO3', 'Sonstiges'];
        foreach ($categories as $category) {
            Category::factory([
                'name' => $category
            ])->create();
        }

        Record::factory(300)->create();

    }
}
