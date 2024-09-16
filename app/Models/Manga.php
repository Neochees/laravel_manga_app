<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Manga extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

}
