<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FormQuestion extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'uniLink',
        'name',
        'status'
    ];
    protected $table = 'form_questions';

    public function Qusetions()
    {
        return $this->hasMany(Question::class);
    }
}
