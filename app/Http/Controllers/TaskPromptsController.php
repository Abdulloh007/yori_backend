<?php

namespace App\Http\Controllers;

use App\Models\TaskPrompts;
use Illuminate\Http\Request;

class TaskPromptsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $prompts = TaskPrompts::all();

        return response()->json(['data' => $prompts], 200);
    }

    public function indexBySubcat(Request $request, $id)
    {
        $prompts = TaskPrompts::where('subcategory_id', $id)->get();

        return response()->json(['data' => $prompts], 200);
    }

    public function search(Request $request, $text)
    {
        $prompts = TaskPrompts::with(['subcategory'])->where('prompt', 'LIKE', "%{$text}%")->get();
        
        return response()->json(['data' => $prompts], 200);
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
    public function show(TaskPrompts $taskPrompts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TaskPrompts $taskPrompts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, TaskPrompts $taskPrompts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(TaskPrompts $taskPrompts)
    {
        //
    }
}
