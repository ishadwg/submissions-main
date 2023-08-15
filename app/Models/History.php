<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class History extends Model
{
    use HasFactory;

    public function actor(): BelongsTo
    {
      return $this->belongsTo(User::class, 'user_id');
    }

    public function submission(): BelongsTo
    {
      return $this->belongsTo(Submission::class);
    }

    public function status(): BelongsTo
    {
      return $this->belongsTo(Status::class);
    }
}
