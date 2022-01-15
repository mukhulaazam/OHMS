@extends('back-end.layouts.master')

@section('content')
    <div class="form-group" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3><b>Doctor</b></h3>
                </div>
            </div>
            <a href="{{route('doctor.list')}}">
                <button style="margin-left: 505px;" class="btn btn-round btn-primary btn-sm">Doctor List</button>
            </a>
            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Add Doctor</h2>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">


                            <form class="form-horizontal form-label-left" method="POST" action="{{route('doctor.add')}}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Doctor Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" name="name" placeholder="Enter Name"
                                               type="text" value="{{ old('name') }}">
                                        <p class="text-danger">{{$errors->first('name')}}</p>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="name">Degree Name <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input id="name" class="form-control" name="degree" placeholder="Enter Name"
                                               type="text" value="{{ old('degree') }}">
                                        <p class="text-danger">{{$errors->first('degree')}}</p>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="number">Doctor Number
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="number" name="phone" placeholder="Enter Your Number"
                                               class="form-control" value="{{ old('phone') }}">
                                        <p class="text-danger">{{$errors->first('phone')}}</p>
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="address">Doctor Address
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="text" id="address" name="address" placeholder="Enter Address"
                                               class="form-control" value="{{ old('address') }}">
                                        <p class="text-danger">{{$errors->first('address')}}</p>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label for="department" class="col-form-label col-md-3 col-sm-3  label-align">Doctor
                                        Department <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" name="department_id">
                                            @foreach($dept as $value)
                                                <option value="" hidden>--Select--</option>
                                                <option value="{{ $value->id }}">{{ $value->name }}</option>
                                            @endforeach
                                        </select>
                                        <p class="text-danger">{{$errors->first('department_id')}}</p>
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="email"> Email <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="email" id="email" name="email" placeholder="Enter Email"
                                               class="form-control" value="{{ old('email') }}">
                                        <p class="text-danger">{{$errors->first('email')}}</p>
                                    </div>
                                </div>

                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align" for="password">Password
                                        <span class="required">*</span></label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="password" id="password" name="password"
                                               placeholder="Password" value="{{ old('password') }}">
                                        <p id="pass" class="text-danger">{{$errors->first('password')}}</p>
                                    </div>
                                </div>
                                <div class="field item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3  label-align" for="telephone">Photo <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="file" id="image" name="img"
                                               value="{{ old('img') }}">

                                    </div>
                                </div>

                                <div class="ln_solid"></div>
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type="reset" class="btn btn-primary btn-sm">Reset</button>
                                        <button type="submit" class="btn btn-success btn-sm submit">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



