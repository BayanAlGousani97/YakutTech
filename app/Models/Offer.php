<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    public $fillable = [
        'type_website', 'commercial_name', 'client_name', 'client_email', 'color', 'domain', 'server', 'status',
    ];
    public function pages()
    {
        return $this->hasMany(Page::class);
    }
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
    public function mediaFiles()
    {
        return $this->hasMany(MediaFile::class);
    }
}
