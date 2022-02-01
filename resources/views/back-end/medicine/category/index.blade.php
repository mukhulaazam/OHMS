@extends('back-end.layouts.master')
@section('brad-title','Medicine Category List')
@section('content')
    <div class="breadcrumb-area d-flex justify-content-between">
        <h4 class="h4 text-bold">Medicine Category List</h4>
        <button href="#" class="btn btn-primary btn-sm float-end" data-toggle="modal"
                data-target="#staticBackdrop">Add Medicine Category
        </button>
    </div>
    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Medicine Category</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($mc as $mc)
            <tr>

                <td>{{$loop->index+1}}</td>
                <td>{{$mc->name }}</td>
                <td>{{$mc->des }}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"
                       data-toggle="modal"
                       data-target="#staticBackdropEdit"><span class="bx bxs-edit-alt"></span></a>
                    <a href="{{route('mc.destroy',['id' => $mc->id])}}" id="staticBackdropEdit"
                       onclick="alert('Are you sure?')" class="btn btn-danger btn-sm"><span
                            class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Bed Category found</td>
            </tr>
        @endforelse
        </tbody>

    </table>

    <!-- Add Modal -->
    <div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-md" style="max-width: 60%">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Add Medicine Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="modal-form" action="{{route('mc.store')}}" method="post">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" name="name" class="form-control form-control-sm">
                                <span id="floor_name_error"></span>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <textarea class="form-control" id="floor_description" name="des"></textarea>
                                <span id="floor_description_error"></span>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary submit">Save</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>




    <!-- edit Modal -->
    {{--    <div class="modal fade" id="staticBackdropEdit" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropEditLabel" aria-hidden="true">--}}
    {{--        <div class="modal-dialog modal-md" style="max-width: 60%">--}}
    {{--            <div class="modal-content">--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="staticBackdropLabel">In Patient Details</h5>--}}
    {{--                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--                        <span aria-hidden="true">&times;</span>--}}
    {{--                    </button>--}}
    {{--                </div>--}}
    {{--                <form id="modal-form"  action="{{route('bed.floor')}}" method="post">--}}
    {{--                    @csrf--}}
    {{--                    <div class="modal-content">--}}
    {{--                        <div class="modal-body">--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Name</label>--}}
    {{--                                <input type="text" class="form-control" id="floor_name" name="name">--}}
    {{--                                <span id="floor_name_error"></span>--}}
    {{--                            </div>--}}
    {{--                            <div class="form-group">--}}
    {{--                                <label>Description</label>--}}
    {{--                                <textarea class="form-control" id="floor_description" name="des"></textarea>--}}
    {{--                                <span id="floor_description_error"></span>--}}
    {{--                            </div>--}}
    {{--                        </div>--}}
    {{--                        <div class="modal-footer">--}}
    {{--                            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>--}}
    {{--                            <button type="submit" class="btn btn-primary submit">Save</button>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </form>--}}

    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}


@endsection

