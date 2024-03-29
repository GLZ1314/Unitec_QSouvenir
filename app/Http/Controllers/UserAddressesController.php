<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAddress;
use App\Http\Requests\UserAddressRequest;
class UserAddressesController extends Controller
{
    //
    public function index(Request $request)
    {
        return view('user_addresses.index', [
            'addresses' => $request->user()->addresses,
        ]);
    }

    public function create()
    {
        return view('user_addresses.create_and_edit', ['useraddress' => new UserAddress()]);
    }

    public function store(UserAddressRequest $request)
    {
        $request->user()->addresses()->create($request->only([
            'FirstName',
            'LastName',
            'address',
            'MobilePhoneNumber',
            'WorkPhoneNumber',
            'HomePhoneNumber',
        ]));

        return redirect()->route('user_addresses.index');
    }


    public function edit(UserAddress $user_address)
    {
        return view('user_addresses.create_and_edit', ['useraddress' => $user_address]);
    }

    public function update(UserAddress $user_address, UserAddressRequest $request)
    {
        $user_address->update($request->only([
            'FirstName',
            'LastName',
            'address',
            'MobilePhoneNumber',
            'WorkPhoneNumber',
            'HomePhoneNumber',
        ]));

        return redirect()->route('user_addresses.index');
    }

    public function destroy(UserAddress $user_address)
    {
        $user_address->delete();

        return redirect()->route('user_addresses.index');
    }
}
