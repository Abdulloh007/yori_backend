<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Validator;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transactions::all();

        $response=['data' => $transactions];

        if(!$transactions->isEmpty())
            return response()->json($response);
        else
            return response()->json(['error'=>'Empty']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $validator = Validator::make($request->all(), [
            'payment_date' => 'required',
            'enrollment_date' => 'required',
            'payment_amount' => 'required',
            'credit_amount' => 'required',
            'withdrawal_status' => 'required',
            'enrollment_status' => 'required',
            'card_holder' => 'required',
            'credit_account' => 'required',
            'location' => 'required',
            'commission' => 'nullable',
            'brand' => 'nullable',
            'bank' => 'nullable',
        ]);


        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $transaction = Transactions::create($input);

        return response()->json(['data' => $transaction], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $transaction = Transactions::find($id);

        if(!$transaction)
            return response()->json(['error' => ['status' => 'Data don\'t exists !']], 404);
        else
            return response()->json(['data' => $transaction], 200);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transactions $transactions)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transactions $transactions)
    {
        //
    }
}
