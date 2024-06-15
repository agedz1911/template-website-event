<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ScientificSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'session',
        'date',
        'time',
        'title',
        'facuty_id',
        'type_participant_id',
        'is_published'
    ];

    public function faculties(): BelongsTo
    {
        return $this->belongsTo(faculty::class);
    }
}
