<?php

namespace App\Models\General;

use App\Models\Profile\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gender extends Model
{
    use HasFactory;

    public function client()   {    return $this->hasOne(Client::class);      }

}
