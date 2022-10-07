<?php

namespace App\Models\Profile;

use App\Models\General\Gender;
use App\Models\General\Profile;
use App\Models\General\Status;
use App\Models\Payments\AccountBank;
use App\Models\Payments\CreditCard;
use App\Models\Pivot\ClientUser;
use App\Models\Transference\TransferencePending;
use App\Models\Transference\TransferenceZelle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function client()    {   return $this->hasOne(Client::class);                        }

    public function gender()    {   return $this->belongsTo(Gender::class);                     }

    public function cards()     {   return $this->hasMany(CreditCard::class, 'clients_id');     }

    public function abs()       {   return $this->hasMany(AccountBank::class, 'clients_id');    }
    
    public function profile()   {   return $this->hasMany(Profile::class);                      }
    
    public function status()    {   return $this->belongsTo(Status::class);                     }

    public function zelle()     {   return $this->hasMany(TransferenceZelle::class);            }
    
    public function pending()   {   return $this->hasMany(TransferencePending::class);          }

    public static function GetClient($data)
    {
        try {
            $user   =   Client::where($data['field'], $data['id'])->firstOrFail();
            return  $user;

        } catch (\Exception $e) {
                return false;
        }
    }

    public static function UpdateCLI($data)
    {
        try {
            $client                     =   Client::findOrFail($data['iId']);
            
            $pivot                      =   ClientUser::where('client_id', '=', $data['iId'])->get();
            $user                       =   User::findOrFail($pivot[0]->user_id);

            $client->name               =   ( ( isset($data['iName']) )         ?   strtoupper($data['iName'])      : '' );
            $client->birthday           =   ( ( isset($data['iBirthday']) )     ?   $data['iBirthday']              : date("Y-m-d", strtotime( date("Y-m-d")."- 18 year")) );
            $client->gender_id          =   ( ( isset($data['iGender']) )       ?   $data['iGender']                : '1' );
            $client->address            =   strtoupper($data['iAddress']);
            $client->latitude           =   ( ( isset($data['iLatitud']) )      ?   $data['iLatitud']               : '00.00000' );
            $client->longitude          =   ( ( isset($data['iLongitud']) )     ?   $data['iLongitud']              : '-00.00000' );
            $client->phone_principal    =   ( ( isset($data['iPhone']) )        ?   $data['iPhone']                 : '' );
            $client->phone_alternative  =   ( ( isset($data['iPhoneAlt']) )     ?   $data['iPhoneAlt']              : '' );
            $client->email_principal    =   ( ( isset($data['iEmail']) )        ?   strtolower($data['iEmail'])     : '' );
            $client->email_alternative  =   ( ( isset($data['iEmailAlt']) )     ?   strtolower($data['iEmailAlt'])  : '' );
            $client->instagram          =   ( ( isset($data['iInstagram']) )    ?   strtolower($data['iInstagram']) : '' );
            $client->facebook           =   ( ( isset($data['iFacebook']) )     ?   strtolower($data['iFacebook'])  : '' );
            $client->twitter            =   ( ( isset($data['iTwitter']) )      ?   strtolower($data['iTwitter'])   : '' );
            $client->youtube            =   ( ( isset($data['iYoutube']) )      ?   strtolower($data['iYoutube'])   : '' );
            $client->advertising        =   ( ( isset($data['iYoutube']) )      ?   strtoupper($data['iAdvs'])      : 'NO' );
            $client->save();
            
            $user->name                 =   ( ( isset($data['iName']) )         ?   strtoupper($data['iName'])      : '' );
            $user->email                =   ( ( isset($data['iEmail']) )        ?   strtolower($data['iEmail'])     : '' );
            $user->save();

        } catch (\Exception $e) {
            return false;
        }
    }
}
