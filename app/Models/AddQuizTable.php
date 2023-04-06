<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddQuizTable extends Model
{
    use HasFactory;

    protected $fillable = ['id'];

    
    protected $table = 'ddd';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->table = $attributes['id'].'_course_quiz';
    }
}
