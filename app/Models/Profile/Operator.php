<?php

namespace App\Models\Profile;

use App\Models\General\Role;
use App\Models\General\Status;
use App\Models\Pivot\OperatorUser;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operator extends Model
{
    use HasFactory;

    public function client()    {    return $this->hasOne(OperatorUser::class);     }

    public function role()      {   return $this->belongsTo(Role::class);          }

    public function status()    {   return $this->belongsTo(Status::class);         }

}
