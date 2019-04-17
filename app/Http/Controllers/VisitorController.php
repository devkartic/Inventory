<?php

namespace App\Http\Controllers;

use App\Detail;
use App\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $visitors = Visitor::all();
        return view('visitors.index', compact('visitors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('visitors.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataPr = array(
            'name' => $request->name,
            'address' => $request->address,
            'age' => $request->age
        );

        $insertId = Visitor::create($dataPr)->id;

        $rowCount = count(request()->input('division_id'));
        $dataCh = array();
        for($i = 0; $i < $rowCount; $i++) {
            $dataCh[] = array(
                'visitor_id' => $insertId,
                'division_id' => request()->input('division_id')[$i],
                'place' => request()->input('place')[$i],
                'from_date' => date('Y-m-d', strtotime(request()->input('from_date')[$i])),
                'to_date' => date('Y-m-d', strtotime(request()->input('to_date')[$i])),
                'durations' => request()->input('durations')[$i],
            );
        }
        Detail::insert($dataCh);

        return redirect('visitors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function show(Visitor $visitor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function edit(Visitor $visitor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visitor $visitor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Visitor  $visitor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Visitor $visitor)
    {
        //
    }
}
