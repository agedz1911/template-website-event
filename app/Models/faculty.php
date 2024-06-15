<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class faculty extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
        'email',
        'instagram',
        'linkedin',
        'twitter',
        'is_active',
        'type_partcipant_id',
        'image'
    ];

    public function scientific_schedule(): HasMany
    {
        return $this->hasMany(ScientificSchedule::class);
    } 

    public function type_participant(): BelongsTo
    {
        return $this->belongsTo(TypeParticipant::class);
    }
}
