<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Transaction;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $new_transaction = Transaction::create(['result' =>'SUCCES', 'issuer' =>'REVOLUT LTD', 'nameOnCard' =>'Test Andras','number' =>'527346xxxxxx']);
    }
}
