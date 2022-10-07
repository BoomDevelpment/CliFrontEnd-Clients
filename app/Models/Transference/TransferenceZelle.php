<?php

namespace App\Models\Transference;

use App\Models\Profile\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenceZelle extends Model
{
    use HasFactory;

    public function     client()    {   return $this->belongsTo(Client::class);             }

    public function     status()    {   return $this->belongsTo(TransferenceStatus::class); }

    public function     type()      {   return $this->belongsTo(TransferenceType::class);   }

    public static function RegisteTrans($data)
    {
        try{
            $new    =   New TransferenceZelle();
            $new->identified    =   $data['identified'];
            $new->client_id     =   $data['client_id'];
            $new->subject       =   strtoupper(trim($data['subject']));
            $new->title         =   strtoupper(trim($data['title']));
            $new->date_trans    =   strtoupper(trim($data['date_trans']));
            $new->reference     =   strtoupper(trim($data['reference']));
            $new->total         =   strtoupper(trim($data['total']));
            $new->bs            =   strtoupper(trim($data['bs']));
            $new->description   =   strtoupper(trim($data['description']));
            $new->type_id       =   $data['type'];
            $new->status_id     =   $data['status'];

            return  ( $new->save() ) ? true : false;

        } catch (\Exception $e) {
            return false;
        }
    }

}
