@extends('back-end.layouts.master')
@section('brad-title','Out Patient list')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <span class="h4 text-bold ">Out Patient List</span>
        <button href="#" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#staticBackdrop">
            Add Patient
        </button>
    </div>

    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Degree</th>
            <th>Department</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        {{--        @forelse($doc as $d)--}}
        {{--            <tr>--}}
        {{--                <td>{{$loop->index+1}}</td>--}}
        {{--                <td>{{$d->name}}</td>--}}
        {{--                <td>{{$d->email}}</td>--}}
        {{--                <td>{{$d->phone}}</td>--}}
        {{--                <td>{{$d->address}}</td>--}}
        {{--                <td>{{$d->degree}}</td>--}}
        {{--                <td>{{$d->department->name}}</td>--}}
        {{--                <td>--}}
        {{--                    <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>--}}
        {{--                    <a href="#" class="btn btn-danger btn-sm"><span class="bx bxs-trash-alt"></span></a>--}}
        {{--                </td>--}}
        {{--                @empty--}}
        {{--                    <td>Sorry! No Department found</td>--}}
        {{--            </tr>--}}
        {{--        @endforelse--}}
        </tbody>

    </table>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="max-width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">In Patient Details</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Age</label>
                            <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                   placeholder="jason backer">
                            <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                                else.</small>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="radioGender">Gender</label>
                                    <div class="radio d-inline">
                                        <label>
                                            <input type="radio" name="op_gender" value="0" class="form-control form-control-sm d-inline"  aria-describedby="genderHelp">Male
                                            <input type="radio" name="op_gender" value="1" class="form-control form-control-sm d-inline" aria-describedby="genderHelp">Female
                                            <input type="radio" name="op_gender" value="2" class="form-control form-control-sm d-inline" aria-describedby="genderHelp">Other
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="bloodGroup">Blood Group</label>
                                    <select name="op_blood_group" id="bloodGroup" class="form-control form-control-sm">
                                        <option selected> Select a Blood Group</option>
                                        <option value="a" > A</option>
                                        <option value="a+" > A+</option>
                                        <option value="b" > B</option>
                                        <option value="b" > B+</option>
                                        <option value="c" > c</option>
                                    </select>
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                            </div>

                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Patient Name</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with
                                        anyone else.</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Age</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Height</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Weigth</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Symptons</label>
                                    <input type="text" class="form-control" id="name" aria-describedby="nameHelp"
                                           placeholder="jason backer">
                                    <small id="nameHelp" class="form-text text-muted">We'll never share your email with anyone
                                        else.</small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

