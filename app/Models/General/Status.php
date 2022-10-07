<?php

namespace App\Models\General;

use App\Models\Payments\AccountBank;
use App\Models\Payments\CreditCard;
use App\Models\Profile\Client;
use App\Models\Profile\Operator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public function status()    {   return $this->hasOne(Status::class);        }
    
    public function operator()  {   return $this->hasOne(Operator::class);      }

    public function tdc()       {   return $this->hasOne(CreditCard::class);    }

    public function ab()        {   return $this->hasOne(AccountBank::class);   }

    public function client()    {   return $this->hasOne(Client::class);        }

}
