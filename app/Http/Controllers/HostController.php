<?php

namespace App\Http\Controllers;

use App\Http\Requests\NameRequest;
use App\Models\Host;
use Illuminate\Http\Request;

class HostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $host = Host::all();

        return view('dashboard',['host' => $host]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NameRequest $request,Host $host)
    {
        $host_id = $host->Create_new_Host($request->name);

        return redirect('/Hosts/AddAttribute?id=' . $host_id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        dd('show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd('edit');
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
        dd('update');
    }


    public function destroy(Request $request,Host $host)
    {
        $request->validate([
            'id' => 'required|numeric'
        ]);

        $host->delete_host($request->id);

        return back();
    }
}
