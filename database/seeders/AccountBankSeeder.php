<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

use App\Models\General\Bank;
use App\Models\General\Status;
use App\Models\Payments\AccountBank;
use App\Models\Payments\AccountBankEntity;
use App\Models\Payments\AccountBankType;
use App\Models\Profile\Client;

class AccountBankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $AB[0]    =   [
            'name'      =>  strtoupper("Luis Campos"),
            'account'   =>  '0108-00000-806265764',
            'bank'      =>  'PROVINCIAL',
            'entity'    =>  'CORRIENTE',
            'type'      =>  'NACIONAL',
            'status'    =>  'ACTIVO'
        ];

        $AB[1]    =   [
            'name'      =>  strtoupper('Sebo Gaukrogers'),
            'account'   =>  '0190-00000-19517977',
            'bank'      =>  'CITIBANK',
            'entity'    =>  'CORRIENTE',
            'type'      =>  'INTERNACIONAL',
            'status'    =>  'ACTIVO'
        ];

        $AB[2]    =   [
            'name'      =>  strtoupper("Carla Rivero"),
            'account'   =>  '0172-00000-137121030',
            'bank'      =>  'BANCAMIGA',
            'entity'    =>  'CORRIENTE',
            'type'      =>  'NACIONAL',
            'status'    =>  'ACTIVO'
        ];

        try {

            $cli    =   Client::get();

            foreach ($AB as $c => $ca) 
            {
                $iAB     =   [
                    'name'          =>  $ca['name'],
                    'last'          =>  substr($ca['account'],-8),
                    'cypher'        =>  $ca,
                    'bank_id'       =>  Bank::where('name', 'like', '%'.substr($ca['bank'],0,6).'%')->get()[0]->id,
                    'type_id'       =>  AccountBankType::where('name', 'like', '%'.substr($ca['type'],0,3).'%')->get()[0]->id,
                    'entity_id'     =>  AccountBankEntity::where('name', 'like', '%'.substr($ca['entity'],0,3).'%')->get()[0]->id,
                    'status_id'     =>  Status::where('name', 'like', '%'.substr($ca['status'],0,3).'%')->get()[0]->id,
                    'clients_id'    =>  $cli[0]->id,
                ];

                $tdc    =   AccountBank::RegisterData($iAB);
            }         
            
        } catch (\Exception $e) {
            echo 'Caught exception: ',  $e->getMessage(), "\n";
        }
    }
}
