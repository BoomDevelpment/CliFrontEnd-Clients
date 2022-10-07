<?php

namespace App\Models\Transference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenceBank extends Model
{
    use HasFactory;

    public static function getNew()
    {
        try {
            return TransferenceBank::WHERE([
            'status_id', '=', 1,
            'client_id', '=', auth()->user()->client->client_id
            ] )->findOrFails();

        } catch (\Exception $e) {

            $bank   =   new TransferenceBank();
            $bank->identified_id    =   1;
            $bank->client_id        =   auth()->user()->client->client_id;
            $bank->bank_id          =   1;
            $bank->type_id          =   1;
            $bank->status_id        =   1;
            return  ( $bank->save() ) ? $bank->id : false;
        }        
    }

    public static function RegisteTrans($data)
    {
        try{
            $new    =   New TransferenceBank();
            $new->identified    =   $data['identified'];
            $new->client_id     =   $data['client_id'];
            $new->subject       =   strtoupper(trim($data['subject']));
            $new->title         =   strtoupper(trim($data['title']));
            $new->date_trans    =   strtoupper(trim($data['date_trans']));
            $new->dni           =   strtoupper(trim($data['dni']));
            $new->account       =   strtoupper(trim($data['account']));
            $new->reference     =   strtoupper(trim($data['reference']));
            $new->total         =   $data['total'];
            $new->bs            =   $data['bs'];
            $new->description   =   strtoupper(trim($data['description']));
            $new->bank_id       =   $data['bank'];
            $new->type_id       =   $data['type'];
            $new->status_id     =   $data['status'];

            return  ( $new->save() ) ? true : false;

        } catch (\Exception $e) {
            return false;
        }
    }
}
