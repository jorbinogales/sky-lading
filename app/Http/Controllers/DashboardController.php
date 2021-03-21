<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use Carbon\Carbon;
use App\Charts\LastYearUserRegistration;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        

        $now = Carbon::now();



        $data = collect([]);

        $now = Carbon::now();

        $year = $now->subMonth(12)->format('Y-m-d');

        $months = array('enero', 'febrero', 'marzo', 'abril', 'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre', 'noviembre', 'diciembre');

        $clients = Client::all()->groupBy(function ($year)
        {
            return Carbon::parse($year->created_at)->format('m');
        });

        $test = collect([]);
        foreach ($clients as $number => $month) {
            $test->put($months[intval($number-1)], $month->count());
        }
        
        $test->sortKeys();
        
        // dd($test);

        return view('backend.dashboard.index', compact('lastYearUserRegistration'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
