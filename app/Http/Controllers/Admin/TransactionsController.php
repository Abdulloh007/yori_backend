<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Roles;
use App\Models\Tarif;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Validator;
use Hash;

class TransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        //
        $user = $request->session()->get('user');
        if ($user === null) {
            return redirect()->route('home');
        }
        $city = City::all();

        if(isset($_GET['city']) && $_GET['city']!=0){
            $getCity = $_GET['city'];
            $transactions = Transactions::where('city', $getCity)->get();
        }else{
            $transactions = Transactions::all();
        }
        
        return view('index',['page'=>'transactions','transactions'=>$transactions, 'cities'=>$city]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('index',['page'=>'transactions-create']);
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
    public function show(int $id, int $admin=0)
    {
        // view users-show return user by id

        $transaction = Transactions::find($id);

        $city = City::find($transaction->location);

        if($city)
            $transaction->city = $city->name;

        if($admin==0)
            return view('index',['page'=>'transactions-show','transaction'=>$transaction]);
        else
            return view('index',['page'=>'transactions-show','transaction'=>$transaction,'admin'=>1]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,int $id)
    {
        $admin = $request->session()->get('user');

        $transaction = Transactions::find($id);

        $city = City::all();

        return view('index',['page'=>'transactions-edit','transaction'=>$transaction, 'city'=>$city]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, int $id)
    {
          $transaction = Transactions::find($id);

          if(!$transaction)
              return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
          else{
              $input = $request->all();
  
              $validator = Validator::make($input, [
                'payment_date' => 'required',
                'enrollment_date' => 'required',
                'payment_amount' => 'required',
                'credit_amount' => 'required',
                'withdrawal_status' => 'required',
                'enrollment_status' => 'required',
                'location' => 'required',
                'card_holder' => 'nullable',
                'credit_account' => 'required',
                'description' => 'nullable',
              ]);
  
                if ($validator->fails()) {
                     return redirect()->route('transactions');
                    dd($validator->errors());
                }

              $user->update($input);
  
             return redirect()->route('transactions');
          }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {

        $transaction = User::find($id);

        if(!$transaction)
            return response()->json(['data'=>['status' => 'Data don\'t exists !']], 404);
        else{
            $transaction->delete();
            return redirect()->route('transactions');
        }

    }
}
