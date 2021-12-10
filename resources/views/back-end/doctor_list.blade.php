@extends('back-end.layouts.master')

@section('content')
    <table id="doctorList" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
            <th>E-mail</th>
            <th>Phone No.</th>
        </tr>
        </thead>
        <tbody>
        @forelse($doctors as $doctor)
            <tr>
                <td>{{ $doctor->first_name }} {{ $doctor->last_name }}</td>
                <td>{{ $doctor->email }}</td>
                <td>{{ $doctor->phone_no }}</td>
            </tr>
        @empty
            <tr>
                <td>No data found</td>
            </tr>
        @endforelse
        </tbody>
    </table>
@endsection
@push('script')
    <script src="cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready(function () {
            $('#doctorList').DataTable();
        });
    </script>
@endpush
