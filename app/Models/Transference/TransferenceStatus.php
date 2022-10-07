<?php

namespace App\Models\Transference;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransferenceStatus extends Model
{
    use HasFactory;

    public function     zelle()    {   return $this->hasOne(TransferenceZelle::class);             }
}
