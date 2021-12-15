@extends('back-end.layouts.master')

@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="h3">Appointment Form</h3>
        </div>
        <div class="card-body">
            <form action="{{ route('appointment.post') }}" method="post">
                @csrf
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail4">First Name</label>
                        <input type="text" class="form-control" id="inputEmail4" value="{{ auth()->user()->first_name }}" readonly>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputPassword4">Last Name</label>
                        <input type="text" class="form-control" id="inputPassword4" value="{{ auth()->user()->last_name }}" readonly>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputState">Choose Doctor</label>
                        <select id="inputState" class="form-control" name="doctor_id">
                            <option selected>Choose a doctor</option>
                            @forelse($doctors as $doctor)
                                <option value="{{ $doctor->id }}">{{$doctor->first_name}} {{$doctor->last_name}}</option>
                            @empty
                                <option>No doctor found</option>
                            @endforelse
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="inputZip">Slot</label>
                        <input type="time" name="slot" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputZip">Date</label>
                        <input type="date" name="date" class="form-control" id="inputZip">
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check">
                        <input class="form-check-input" name="agree" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                            Check me out
                        </label>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Sign in</button>
            </form>
        </div>
    </div>
@endsection
