<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    Protected $guarded =[];

    public function author()
    {
        return $this -> belongsTo(Admin::class, 'admin_id','id');
    }

    public function category()
    {
        return $this -> belongsToMany(Category::class);
    }
    public function tag()
    {
        return $this -> belongsToMany(Tag::class);
    }
}
