@extends('back-end.layouts.master')
@section('brad-title','Patient list')
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
        @forelse($patients as $patient)
           <tr>
               <td>{{ $loop->index +1 }}</td>
               <td>{{ $patient->first_name }} {{ $patient->last_name }}</td>
               <td>{{ $patient->email }}</td>
               <td>{{ $patient->phone_no }}</td>
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

