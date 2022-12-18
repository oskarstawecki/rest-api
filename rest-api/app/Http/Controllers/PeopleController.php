<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeoplePostRequest;
use App\Models\People;
use App\Http\Requests\StorePeopleRequest;
use App\Http\Requests\UpdatePeopleRequest;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;

class PeopleController extends Controller
{
    public function index():JsonResponse
    {
        return response()->json(People::all(),200);
    }

    public function store(StorePeopleRequest $request)
    {
        $people = People::create($request->all());
        return response()->json([
            'status'=> true,
            'message'=> "People added to db. Success",
            'people'=> $people
        ],200);
    }

    public function show(People $people):JsonResponse
    {
        return response()->json([
            'status'=> true,
            'message'=> "People show. Success",
            'people'=> $people
        ],200);
    }

    public function update(UpdatePeopleRequest $request, People $people)
    {
        $people->update(['name' => $request]);
        return response()->json([
            'status'=> true,
            'message'=> "People update to db. Success"
        ],200);
    }

    public function delete(People $people):JsonResponse
    {
        $people->delete();
        return response()->json([
            'status'=> true,
            'message'=> "People delete from db. Success"
        ],200);
    }
    
}
