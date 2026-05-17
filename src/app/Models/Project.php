<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'slug',
        'short_description',
        'problem_analysis',
        'system_requirements',
        'tech_stack',
        'diagram',
        'progress_status',
    ];
}