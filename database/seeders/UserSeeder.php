<?php

namespace Database\Seeders;

use App\Models\General\Gender;
use App\Models\General\Profile;
use App\Models\General\Role;
use App\Models\General\Status;
use App\Models\Pivot\ClientUser;
use App\Models\Pivot\OperatorUser;
use App\Models\Profile\Client;
use App\Models\Profile\Operator;
use App\Models\User;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Registro 1
         */
        $use                =   New User();
        $use->name          =   strtoupper('admin');
        $use->email         =   strtolower('administrator@boomsolutions.com');
        $use->username      =   'admin';
        $use->password      =   bcrypt('Boom1234');
        $use->identified    =   sprintf("%06d", mt_rand(1, 999999));
        $use->profile_id    =   Profile::where('name', 'like', '%adm%')->get()[0]->id;
        $use->created_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->updated_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->save();

        $ope                =   New Operator();
        $ope->name          =   strtoupper('admin');
        $ope->username      =   'admin';
        $ope->ext_pr        =   0;
        $ope->ext_vz        =   0;
        $ope->ext_us        =   0;
        $ope->role_id       =   Role::where('name', 'like', '%adm%')->get()[0]->id;
        $ope->status_id     =   Status::where('name', 'like', '%act%')->get()[0]->id;
        $ope->created_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $ope->updated_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $ope->save();

        $OpeUse                 =   New OperatorUser();
        $OpeUse->operator_id    =   $ope->id;
        $OpeUse->user_id        =   $use->id;
        $OpeUse->save();

        /**
         * Registro 2
         */

        $use                =   New User();
        $use->name          =   strtoupper('Development - Cliente de pruebas');
        $use->email         =   strtolower('luis.924@boomsolutions.com');
        $use->username      =   '123456789';
        $use->password      =   bcrypt('123456789');
        $use->identified    =   sprintf("%06d", mt_rand(1, 999999));
        $use->profile_id    =   Profile::where('name', 'like', '%cli%')->get()[0]->id;
        $use->created_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->updated_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->save();

        $cli                    =   New Client();
        $cli->mikrowisp         =   16;
        $cli->name              =   strtoupper('Development - Cliente de pruebas');
        $cli->birthday          =   '2000-01-01';
        $cli->address           =   0;
        $cli->latitude          =   0;
        $cli->longitude         =   Role::where('name', 'like', '%adm%')->get()[0]->id;
        $cli->phone_principal   =   Status::where('name', 'like', '%act%')->get()[0]->id;
        $cli->phone_alternative =   Carbon::now()->format('Y-m-d H:i:s');
        $cli->email_principal   =   Carbon::now()->format('Y-m-d H:i:s');
        $cli->email_alternative =   Carbon::now()->format('Y-m-d H:i:s');
        $cli->batch             =   1;
        $cli->facebook          =   '';
        $cli->instagram         =   '';
        $cli->twitter           =   '';
        $cli->youtube           =   '';
        $cli->advertising       =   strtoupper('si');
        $cli->gender_id         =   Gender::where('name', 'like', '%mas%')->get()[0]->id;
        $cli->status_id         =   Status::where('name', 'like', '%act%')->get()[0]->id;
        $cli->created_at        =   Carbon::now()->format('Y-m-d H:i:s');
        $cli->updated_at        =   Carbon::now()->format('Y-m-d H:i:s');
        $cli->save();

        $CliUse                 =   New ClientUser();
        $CliUse->client_id      =   $cli->id;
        $CliUse->user_id        =   $use->id;
        $CliUse->save();

        /**
         * Registro 3
         */
        $use    =   $ope    =   $OpeUse     =   '';
        
        $use                =   New User();
        $use->name          =   strtoupper('Luis Campos');
        $use->email         =   strtolower('luis.924@boomsolutions.com');
        $use->username      =   'lcampos';
        $use->password      =   bcrypt('nd4spd');
        $use->identified    =   sprintf("%06d", mt_rand(1, 999999));
        $use->profile_id    =   Profile::where('name', 'like', '%adm%')->get()[0]->id;
        $use->created_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->updated_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $use->save();

        $ope                =   New Operator();
        $ope->name          =   strtoupper('Luis Campos');
        $ope->username      =   'lcampos';
        $ope->ext_pr        =   0;
        $ope->ext_vz        =   0;
        $ope->ext_us        =   0;
        $ope->role_id       =   Role::where('name', 'like', '%adm%')->get()[0]->id;
        $ope->status_id     =   Status::where('name', 'like', '%act%')->get()[0]->id;
        $ope->created_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $ope->updated_at    =   Carbon::now()->format('Y-m-d H:i:s');
        $ope->save();

        $OpeUse                 =   New OperatorUser();
        $OpeUse->operator_id    =   $ope->id;
        $OpeUse->user_id        =   $use->id;
        $OpeUse->save();
    }
}
