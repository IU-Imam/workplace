<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['jobtitle', 'company', 'location','salary','jobtype','post_img','id','post_details'];

    public function getRouteKeyName()
{
    return 'post_id';
}
}
