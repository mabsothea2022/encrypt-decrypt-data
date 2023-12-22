<?php

namespace App\Http\Controllers;

use App\Models\transactionsModel;
use Illuminate\Http\Request;

class transactionsController extends Controller
{
    public function index(){
        $data = transactionsModel::all();
        return view("DataEncryptDecrypt.front",compact("data"));
    }

    public function create(){
        return view("DataEncryptDecrypt.add");
    }
    
    public function store(Request $request){
        $this->validate($request,[
            "card_name"=>"required",
            "card_no"=>"required|numeric|min:16",
            "exp_month"=>"required|numeric|min:2",
            "exp_year"=>"required|numeric|min:4",
            "cvv"=>"required|numeric|min:3"
        ]);

        transactionsModel::create($request->all());
        return redirect()->route("data.index");
    }

    public function destroy($id){
        transactionsModel::find($id)->delete();
        return redirect()->route("data.index");
    }
}
