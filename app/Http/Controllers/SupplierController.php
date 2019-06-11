<?php

namespace App\Http\Controllers;
use App\Supplier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class SupplierController extends Controller
{
    //
    public function index()
    {
        $suppliers=Supplier::all();
        return view('Suppliers.index',compact('suppliers'));
    }

    public function Create(){
        return view('Suppliers.Create');
    }

    public function CreatePost(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'address' => 'max:100',
            'name' => 'required|max:50',
        ]);
        if ($validator->fails()) {
            return redirect('Suppliers/Create')
                ->withErrors($validator)
                ->withInput();
        }

        $supplier = new Supplier([
           'address' =>$_POST['address'],
            'name' => $_POST['name'],
        ]);

        $supplier ->save();
        return redirect('Suppliers');
    }
}
