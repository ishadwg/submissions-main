<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Status extends Model
{
    use HasFactory;

    // class constants
    public const PENDING = ['id' => 1, 'name' => 'Pending'];
    public const APPROVED = ['id' => 2, 'name' => 'Approved'];
    public const REJECTED = ['id' => 3, 'name' => 'Rejected'];

    public function submissions(): HasMany
    {
      return $this->hasMany(Submission::class);
    }

    public function histories(): HasMany
    {
      return $this->hasMany(History::class);
    }
}
