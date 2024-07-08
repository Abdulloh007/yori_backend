<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\UserBearer;
use Illuminate\Http\Request;
use Validator;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();

        $response=['data'=>$reviews];

        if(!$reviews->isEmpty())
            return response()->json($response);
        else
            return response()->json(['status'=>'Empty']);
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
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'from' => 'required',
            'to' => 'required',
            'task_id' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }
        $user = UserBearer::find($input["to"]);
        
        $review = Review::create($input);
        //dd(($user->rating + $input["rate"]));
        $user->update(["rating" => ($user->rating + $input["rate"])]);
        
        return response()->json(['data'=>$review],200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $review = Review::find($id);

        if(!$review)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $review], 200);
    }

    /**
    * Display the specified resource.
    */
    public function showbytask(int $id)
    {
        $review = Review::where('task_id',$id)->get();

        if(!$review)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $review], 200);
    }
    
    /**
    * Display the specified resource.
    */
    public function showbyuser(int $id)
    {
        $reviews = Review::where('to',$id)->get();
        
        foreach($reviews as $item) {
            $user = UserBearer::find($item->from);
            $item->from = $user;
        }
        if(!$reviews)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $reviews], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
        $review = Review::find($id);

        if(!$review)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $input = $request->all();

            $validator = Validator::make($input, [
                'from' => 'nullable',
                'to' => 'nullable',
                'task_id' => 'nullable',
                'text' => 'nullable',
            ]);

            if ($validator->fails()) {
                return response()->json(['error' => $validator->errors()], 400);
            }

            $review->update($input);

            return response()->json(['data' => $review], 200);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $review = Review::find($id);

        if(!$review)
            return response()->json(['error'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $review->delete();
            return response()->json(['data'=>['status' => 'Review deleted !']], 200);
        }
    }
}
