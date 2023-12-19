<?php

namespace App\Http\Controllers;

use App\Models\Courier;
use App\Models\Province;
use App\Models\city;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $province = $this->getProvince();
        $cities = $this->getcity();
        $couriers = $this->getCourier();
        $citiesSearch = City::all();
        return view('home', compact('province','cities','couriers','citiesSearch'));
    }

    public function getProvince()
    {
        return Province::pluck('title', 'code');
    }
    public function getcity()
    {
        return city::pluck('title', 'code');
    }
    public function getCourier()
    {
        return Courier::all();
    }

    public function store(Request $request)
    {
        dd($request->all());
    }
}
