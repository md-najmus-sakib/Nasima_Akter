<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image',
        'demo_url',
        'github_url',
        'technologies',
        'start_date',
        'end_date',
        'is_featured'
    ];
    protected $casts = [
        'technologies' => 'array',
        'start_date' => 'date',
        'end_date' => 'date',
        'is_featured' => 'boolean'
    ];
}