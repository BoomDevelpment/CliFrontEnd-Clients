<?php

namespace App\Models\Scrapers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Scrapers extends Model
{
    use HasFactory;
    
    public $fillable =  ['id', 'uuid', 'dolar', 'euro', 'yuan', 'lira', 'rublo', 'status_id', 'created_at', 'updated_at'];

    protected $table = 'scrapers';

    public static function insertData($data)
    {
        try {
            $new    =   new Scrapers();
            $new->uuid      =   Str::uuid()->toString();
            $new->euro      =   $data['euro'];
            $new->yuan      =   $data['yuan'];
            $new->lira      =   $data['lira'];
            $new->rublo     =   $data['rublo'];
            $new->dolar     =   $data['dolar'];
            $new->status_id =   1;
            $new->save();
            
            $upd    =   Scrapers::where('id', '<>', $new->id)->update(['status_id' => '2']);
            
            return true;

        } catch (\Exception $e) {
            return false;
        }
    }

    public static function getLast()
    {
        try {
            return Scrapers::orderBy('id', 'desc')->first();

        } catch (\Exception $e) {
            return false;
        }        
    }
}
