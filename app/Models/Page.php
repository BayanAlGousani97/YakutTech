<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    public $fillable=[
        'name','description','offer_id',
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }
}
