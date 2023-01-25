<?php

namespace App\Models;

use App\Models\Portfolio;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfooliocategory extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Portfolio()
    {
        return $this -> belongsToMany(Portfolio::class);
    }
}
