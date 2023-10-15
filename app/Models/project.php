<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;

    protected $table = 'your_table_name';
    protected $fillable = ['title','user_id', 'picture_url', 'description', 'explanation'];
}
