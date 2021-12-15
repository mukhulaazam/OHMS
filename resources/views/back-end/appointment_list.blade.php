@extends('back-end.layouts.master')
@section('brad-title','Appointment list')
@section('content')
    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @if(Auth::user()->user_type == '1X101')
            @php
                $appointments = \App\Models\Appointment::where('user_id', Auth::user()->id)->get();

            @endphp
            @forelse($appointments as $appointment)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $appointment->appointment_date }}</td>
                    <td>{{ $appointment->appointment_slot }}</td>
                    @empty
                        <td>No Appointment</td>
                </tr>
            @endforelse
        @else
            @php
                $appoints = \App\Models\Appointment::all();
            @endphp
            @forelse($appoints as $a)
                <tr>
                    <td>{{ $loop->index +1 }}</td>
                    <td>{{ $a->appointment_date }}</td>
                    <td>{{ $a->appointment_slot }}</td>
                    @empty
                        <td>No Appointment</td>
                </tr>
            @endforelse
        @endif
        </tbody>
    </table>
@endsection

