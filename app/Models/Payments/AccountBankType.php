<?php

namespace App\Models\Payments;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBankType extends Model
{
    use HasFactory;

    public function type() {   return $this->hasOne(AccountBankType::class);    }
}
