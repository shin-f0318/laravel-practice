<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Content extends Model
{
    use HasFactory;
    use SoftDeletes;
    // protected $fillable = ['id', 'name', 'hurigana', 'email', 'tel', 'message', 'contact'];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
