<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StatusSeeder::class);
        $this->call(ProfileSeeder::class);
        $this->call(GenderSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(BankSeeder::class);
        $this->call(UserSeeder::class);
        
        $this->call(AccountBankEntitySeeder::class);
        $this->call(AccountBankTypeSeeder::class);
        $this->call(CreditCardEntitySeeder::class);
        $this->call(CreditCardTypeSeeder::class);
        
        $this->call(CreditCardSeeder::class);
        $this->call(AccountBankSeeder::class);

        $this->call(TransferenceStatusSeeder::class);
        $this->call(TransferenceTypeSeeder::class);
        $this->call(TransferenceMethodSeeder::class);

        $this->call(ScrapersSeeder::class);
    }
}
