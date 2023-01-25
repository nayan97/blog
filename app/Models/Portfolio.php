<?php

namespace App\Models;

use App\Models\Portfooliocategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Portfolio extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function Portfooliocategory()
    {
        return $this -> belongsToMany(Portfooliocategory::class);
    }
}
