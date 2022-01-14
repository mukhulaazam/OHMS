@extends('back-end.layouts.master')

@section('content')
    <table id="dataTableView" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Sl No.</th>
            <th>Name</th>
            <th>des</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($departments as $dep)
            <tr>
                <td>{{$loop->index+1}}</td>
                <td>{{$dep->name}}</td>
                <td>{{$dep->des}}</td>
                <td>
                    <a href="#" class="btn btn-warning btn-sm"><span class="bx bxs-edit-alt"></span></a>
                    <a href="#" class="btn btn-danger btn-sm"><span class="bx bxs-trash-alt"></span></a>
                </td>
                @empty
                    <td>Sorry! No Department found</td>
            </tr>
        @endforelse
        </tbody>

    </table>
@endsection
