<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Camp;
use App\Http\Controllers\Controller;

class CampsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // search
        $camps = Camp::search($request);

        return $camps;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Camp::create($request);

        return redirect('api/camps');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $camp = Camp::find($id);

        return $camp;
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
        $camp = Camp::find($id);
        $camp->title = $request->title;
        $camp->address = $request->address;
        $camp->url = $request->url;
        $camp->body = $request->body;
        $camp->prefecture_id = $request->prefecture_id;
        $camp->save();
        return redirect("api/camps/" . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $camp = Camp::find($id);
        $camp->delete();
        return redirect('api/camps');
    }
}
