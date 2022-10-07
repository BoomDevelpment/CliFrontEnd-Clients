<?php

namespace App\Models\Transference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenceMovil extends Model
{
    use HasFactory;

    public static function RegisteTrans($data)
    {

        try{
            $new    =   New TransferenceMovil();
            $new->identified    =   $data['identified'];
            $new->client_id     =   $data['client_id'];
            $new->subject       =   strtoupper(trim($data['subject']));
            $new->title         =   strtoupper(trim($data['title']));
            $new->date_trans    =   strtoupper(trim($data['date_trans']));
            $new->dni           =   strtoupper(trim($data['dni']));
            $new->phone         =   strtoupper(trim($data['phone']));
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
