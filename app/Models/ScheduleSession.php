<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ScheduleSession extends Model
{
    use HasFactory;

    protected $fillable = [
        'session',
        'date',
        'timeStart',
        'timeEnd',
        'room',
        'moderator_id',
        'is_published'
    ];

    public function moderator(): BelongsTo
    {
        return $this->belongsTo(faculty::class);
    }

    public function schedule(): HasMany
    {
        return $this->hasMany(ScientificSchedule::class, 'session_id', 'id');
    }
}
