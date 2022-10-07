<?php

namespace Database\Seeders;

use App\Models\Payments\CreditCard;
use App\Models\Payments\CreditCardEntity;
use App\Models\Payments\CreditCardType;
use App\Models\Profile\Client;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class CreditCardSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $card[0]  =   [
            'name'      =>  strtoupper('Sebo Gaukrogers'),
            'card'      =>  '4540416504522423',
            'cvv'       =>  '852',
            'month'     =>  '11',
            'year'      =>  '2025',
            'entity'    =>  'VISA',
            'type'      =>  'NACIONAL'
        ];

        $card[1]  =   [
            'name'      =>  strtoupper('Wei Boulanger'),
            'card'      =>  '5185879675085420',
            'cvv'       =>  '963',
            'month'     =>  '11',
            'year'      =>  '2030',
            'entity'    =>  'MASTERCARD',
            'type'      =>  'INTERNACIONAL'
        ];
        
        $card[2]  =   [
            'name'      =>  strtoupper('Riyadh Bellucci'),
            'card'      =>  '379948851893381',
            'cvv'       =>  '741',
            'month'     =>  '09',
            'year'      =>  '2028',
            'entity'    =>  'AMERICAN EXPRESS',
            'type'      =>  'NACIONAL'
        ];

        try {

            $cli    =   Client::get();

            foreach ($card as $c => $ca) 
            {
                $iCard  =   [
                    'name'      =>  $ca['name'],
                    'last'      =>  substr($ca['card'],-8),
                    'cvv'       =>  $ca['cvv'],
                    'month'     =>  $ca['month'],
                    'year'      =>  $ca['year'],
                    'cypher'    =>  $ca,
                    'type_id'   =>  CreditCardType::where('name', 'like', '%'.substr($ca['type'],0,3).'%')->get()[0]->id,
                    'entity_id' =>  CreditCardEntity::where('name', 'like', '%'.substr($ca['entity'],0,3).'%')->get()[0]->id,
                    'status_id' =>  $cli[0]->status->id,
                    'client_id' =>  $cli[0]->id
                ];

                $tdc    =   CreditCard::RegisterData($iCard);
            }         
            
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }

    }
}
