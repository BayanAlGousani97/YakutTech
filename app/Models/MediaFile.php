<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class MediaFile extends Model
{
    use HasFactory;
    public $fillable=[
        'file_name','offer_id',
    ];

    public function offer(){
        return $this->belongsTo(Offer::class);
    }

}
