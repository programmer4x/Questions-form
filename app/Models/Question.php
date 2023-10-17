<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Question extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'question_id',
        'title',
        'type',
    ];

    public function FormQuestion()
    {
        $this->belongsTo(FormQuestion::class);
    }

    public function Answer()
    {
        $this->belongsTo(Answer::class);
    }
}
