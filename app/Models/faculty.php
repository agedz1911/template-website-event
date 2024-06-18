<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class faculty extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = [
        'name',
        'country',
        'email',
        'instagram',
        'linkedin',
        'twitter',
        'is_active',
        'image'
    ];

    public function scientific_schedule(): HasMany
    {
        return $this->hasMany(ScientificSchedule::class);
    } 

    public function type_participants(): BelongsToMany
    {
        return $this->belongsToMany(TypeParticipant::class);
    }
}
