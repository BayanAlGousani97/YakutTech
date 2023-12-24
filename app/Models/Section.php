<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory;
    public $fillable=[
        'name','offer_id',
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
