<?php

namespace App\Http\Controllers;

use App\Models\Statistic;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $statistic = Statistic::all();
        return view('admin.statistic.index',compact('statistic'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.statistic.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Statistic::create($requestData);
        return redirect()->route('statistic.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Statistic $statistic)
    {
        return view('admin.statistic.show',compact('statistic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Statistic $statistic)
    {
        return view('admin.statistic.edit',compact('statistic'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Statistic $statistic)
    {
        $requestData = $request->all();
        $statistic->update($requestData);
        return redirect()->route('statistic.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Statistic $statistic)
    {
        $statistic->delete();
        return redirect()->route('statistic.index');
    }
}
