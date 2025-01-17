<?php

namespace App\Http\Controllers;

use App\Http\Requests\YachtRequest;
use App\Http\Resources\YachtResource;
use App\Models\Yacht;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Psy\Util\Json;

class YachtController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $name = $request->input("name");
        $type = $request->input("type");

        $yachts=Yacht::query();
        if ($name!=""){
            $yachts = $yachts
                ->where("name","like","%".$name."%");
        }
        if ($type!=""){
            $yachts=$yachts->where("type","=",$type);
        }
        return YachtResource::collection($yachts->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(YachtRequest $request)
    {
        $yacht = Yacht::query()->create($request->validated());
        return YachtResource::make($yacht);
    }

    /**
     * Display the specified resource.
     */
    public function show(Yacht $yacht)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Yacht $yacht)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(YachtRequest $request, Yacht $yacht)
    {
        $yacht->update($request->validated());
        return YachtResource::make($yacht);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Yacht $yacht)
    {
        $yacht->delete();
    }
}
