<?php

namespace App\Models\General;

use App\Models\Profile\Operator;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    public function operator() {   return $this->hasOne(Operator::class);    }
}
