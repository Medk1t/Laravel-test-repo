<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Negr extends Model
{
    use HasFactory;

    protected $fillable = ['id','name','msg','toyota_id','bebra_id','date_of_rofls'];

    public function Toyota(){
        return $this->belongsTo('toyota_id', 'id');
    }

    public function Bebra(){
        return $this->belongsTo('bebra_id', 'id');
    }
}
