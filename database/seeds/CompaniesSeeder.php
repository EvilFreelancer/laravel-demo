<?php

use Illuminate\Database\Seeder;

class CompaniesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        factory(\App\Models\Company::class, 3)
            ->create()
            ->each(function (\App\Models\Company $company) use ($faker) {

                // Get list of random users
                $users = \App\User::inRandomOrder()->limit(random_int(1, 5))->get();

                $users->map(function (\App\User $user) use ($company, $faker) {
                    $company->users()->attach($user->id, ['title' => $faker->jobTitle]);
                });
            });
    }
}
