@extends('layouts.app')
@section('title', ($useraddress->id ? 'Edit': 'Add') . ' User Details')

@section('content')
    <div class="row">
        <div class="col-md-4">
                <h2 class="text-center">
                    {{ $useraddress->id ? 'Edit': 'Add' }} User Details
                </h2>
                        <!-- 输出后端报错开始 -->
                    @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <h4>Errors Occurred：</h4>
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li><i class="glyphicon glyphicon-remove"></i> {{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                    @endif
                    <!-- 输出后端报错结束 -->
                    @if($useraddress->id)
                        <form class="form-horizontal" role="form" action="{{ route('user_addresses.update', ['user_address' => $useraddress->id]) }}" method="post">
                            {{ method_field('PUT') }}
                          @else
                         <form class="form-horizontal" role="form" action="{{ route('user_addresses.store') }}"
                          method="post">
                        @endif
                        {{csrf_field()}}
                        <div class="form-group">
                            <label>First Name</label>
                                <input type="text" class="form-control" name="FirstName" value="{{ old('FirstName', $useraddress->FirstName) }}">

                        </div>
                        <div class="form-group row">
                            <label>Last Name</label>

                                <input type="text" class="form-control" name="LastName" value="{{ old('LastName', $useraddress->LastName) }}">

                        </div>
                        <div class="form-group">
                            <label>Address</label>

                                <input type="text" class="form-control" name="address" value="{{ old('address', $useraddress->address) }}">

                        </div>
                        <div class="form-group">
                            <label>Mobile Phone Number</label>

                                <input type="text" class="form-control" name="MobilePhoneNumber" value="{{ old('MobilePhoneNumber', $useraddress->MobilePhoneNumber) }}">

                        </div>
                        <div class="form-group">
                            <label>Work Phone Number</label>

                                <input type="text" class="form-control" name="WorkPhoneNumber" value="{{ old('WorkPhoneNumber', $useraddress->WorkPhoneNumber) }}">

                        </div>
                        <div class="form-group">
                            <label>Home Phone Number</label>

                                <input type="text" class="form-control" name="HomePhoneNumber" value="{{ old('HomePhoneNumber', $useraddress->HomePhoneNumber) }}">

                        </div>
                        <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>

        </div>
    </div>
@endsection
