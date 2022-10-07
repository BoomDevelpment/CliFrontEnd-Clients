<?php

namespace App\Models\Transference;

use App\Models\Profile\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferencePending extends Model
{
    use HasFactory;

    public function     client()      {   return $this->belongsTo(Client::class);   }

    public static function RegisteTrans($data)
    {
        try{
            $new    =   New TransferencePending();
            $new->identified    =   $data['identified'];
            $new->client_id     =   $data['client'];
            $new->transaction   =   $data['transaction'];
            $new->method_id     =   $data['method'];
            $new->status_id     =   $data['status'];

            return  ( $new->save() ) ? true : false;

        } catch (\Exception $e) {
            return false;
        }
    }


}
