<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizzes';

    protected $primaryKey = 'id';

    protected $fillable = [
        'title',
        'description',
        'score',
        'is_published',
    ];

    public function question()
    {
        return $this->hasMany(Question::class);
    }

    public function user()
    {
        return $this->belongsToMany(User::class);
    }
}
