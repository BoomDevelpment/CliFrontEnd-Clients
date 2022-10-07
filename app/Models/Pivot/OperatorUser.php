<?php

namespace App\Models\Pivot;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OperatorUser extends Model
{
    use HasFactory;

    public function operator()      {   return $this->belongsTo(OperatorUser::class);     }
}
