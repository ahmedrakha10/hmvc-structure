<?php

namespace Customers\database\seeds;

use Customers\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 50; $i++) {
            Customer::create([
                                 'name'     => 'test' .$i,
                             ]);
        }
    }
}
