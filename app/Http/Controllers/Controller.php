<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;


    // Video Post link

    //https://www.youtube.com/watch?v=e3i9QhsEufw

    public function embed($link = '')
    {
        $embed_link = str_replace('watch?v=', 'embed/', $link);
        $embed_arr = explode('&t', $embed_link);
        return $embed_arr[0]; 
    }
}
