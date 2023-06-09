<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Str;
use App\Models\Technology;

class Project extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'description','color_palette','jumbo_image','type_id'];

    public static function generateSlug($name){
        return Str::slug($name, '-');
    }

    public function type(): BelongsTo          
    {
        return $this->belongsTo(Type::class);
    }

    public function Technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class);
    }
}
