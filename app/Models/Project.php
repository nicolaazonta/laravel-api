<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description','color_palette','jumbo_image'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }

    public function types(): BelongsTo          
    {
        return $this->belongsTo(Type::class);
    }
}
