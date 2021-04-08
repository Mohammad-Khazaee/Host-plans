<?php

namespace App\Http\Controllers;

use App\Http\Requests\addattrRequest;
use App\Http\Requests\CheckIdRequest;
use App\Models\Host;
use App\Models\Host_detail;
use Illuminate\Http\Request;

class AddAttributeController extends Controller
{
    public function AddAttribute(Request $request)
    {
        $request->validate(['id' => 'required|numeric']);

        $host = Host::find($request->id);

        $host_detail = $host->Host_detail();

        return view('AddAttribute',['id' => $request->id , 'host' => $host]);
    }

    public function store(addattrRequest $request,Host_detail $host_detail)
    {
        $host_detail->store_new_attribute($request->validated()); 

        return back();
    }
}
