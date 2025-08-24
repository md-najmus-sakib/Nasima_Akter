<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Portfolio extends Model
{
    protected $fillable = [
        'name',
        'title',
        'bio',
        'email',
        'phone',
        'location',
        'profile_image',
        'cv_link',
        'social_links'
    ];
    protected $casts = [
        'social_links' => 'array'
    ];
}