<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Dinushchathurya\Secretariat\Secretariat;

class HomeController extends Controller
{
    public function index()
    {
        $provinces = Secretariat::getProvinces();
        return view('welcome')->with([
            'provinces' => $provinces
        ]);
    }

    public function getDistricts($name)
    {
        $district = Secretariat::getDistricts($name);
        return response()->json($district);
    }

    public function getAuthority($name)
    {
        $authority = Secretariat::getAuthorities($name);
        return response()->json($authority);
    }

    public function documentation()
    {
        return view('pages.documentation');
    }

}
