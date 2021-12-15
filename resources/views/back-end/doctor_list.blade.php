@extends('back-end.layouts.master')
@section('brad-title','Doctor list')
@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">E-mail</th>
            <th scope="col">Phone</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @forelse($doctors as $doctor)
           <tr>
               <td>{{ $loop->index +1 }}</td>
               <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
               <td>{{ $doctor->email }}</td>
               <td>{{ $doctor->phone_no }}</td>
               <td>
                   <a href="#" class="btn btn-info btn-sm"><i class="bx bxs-edit"></i></a>
                   <a href="#" class="btn btn-warning btn-sm"><i class="bx bxs-stopwatch"></i></a>
               </td>
           </tr>
        @empty
        @endforelse
        </tbody>
    </table>
@endsection
