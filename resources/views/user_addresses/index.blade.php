@extends('layouts.app')
@section('title', '收货地址列表')

@section('content')
    <h2>User Details</h2>
    <br>
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card panel-default">
                <div class="card-header">
                        <button>
                            <a href="{{ route('user_addresses.create') }}">Add User Details</a>
                        </button>
                </div>
                <br>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>MobilePhoneNumber</th>
                            <th>WorkPhoneNumber</th>
                            <th>HomePhoneNumber</th>
                            <th>Operation</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($addresses as $address)
                            <tr>
                                <td>{{ $address->FirstName }}</td>
                                <td>{{ $address->LastName }}</td>
                                <td>{{ $address->address }}</td>
                                <td>{{ $address->MobilePhoneNumber }}</td>
                                <td>{{ $address->WorkPhoneNumber }}</td>
                                <td>{{ $address->HomePhoneNumber }}</td>
                                <td>
                                    <a href="{{ route('user_addresses.edit',['user_address' => $address->id])}}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('user_addresses.destroy', ['user_address' => $address->id]) }}" method="post" style="display: inline-block">
                                        {{ csrf_field() }}
                                        {{ method_field('DELETE') }}
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
