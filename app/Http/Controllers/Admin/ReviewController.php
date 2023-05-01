<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Review;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reviews = Review::all();
        
        foreach($reviews as $review){
            $user = User::find($review->from);

            if(!$user){
                $review->from_name = 'User don\'t exists';
            }else
                $review->from_name = $user->name;

            $user = User::find($review->to);

            if(!$user){
                $review->to_name = 'User don\'t exists';
            }else
                $review->to_name = $user->name;
            
            $task = Task::find($review->task_id);

            if(!$task){
                $review->task_title = 'Task don\'t exists';
            }else
                $review->task_title = $task->title;
        
        }
        
        return view('index',['page'=>'review','reviews'=>$reviews]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Review $review)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Review $review)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $review)
    {
        // delete if exist
        $review = Review::find($review);

        if($review)
            $review->delete();
        
        return redirect()->route('review');
    }
}
