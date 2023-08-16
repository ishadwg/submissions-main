<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Submission extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'attachment', 'user_id', 'status_id'];

    public function submitter(): BelongsTo
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function status(): BelongsTo
    {
      return $this->belongsTo(Status::class);
    }

    public function histories(): HasMany
    {
      return $this->hasMany(History::class);
    }
}
