<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    CONST ROUTE_URl = '/';
    
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    
    public function testMethod()
    {
        $var = null;
        
        return false;
    }
}
