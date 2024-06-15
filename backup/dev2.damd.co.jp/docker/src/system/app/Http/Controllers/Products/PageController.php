<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function products($company, $name)
    {
        $txt = 'products.'.$company.".".$name.".index";
        return view($txt);
    }

    public function company($company)
    {
        $txt = 'products.'.$company.".index";
        return view($txt);
    }

}