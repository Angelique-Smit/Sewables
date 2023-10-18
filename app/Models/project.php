<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class project extends Model
{
    use HasFactory;

    protected $table = 'project';
    protected $fillable = ['title','users_id', 'picture_url', 'description', 'explanation'];

    public function user(): BelongsTo
    {
        return $this->BelongsTo(User::class);
    }
}
