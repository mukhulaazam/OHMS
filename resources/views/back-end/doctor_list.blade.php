@extends('back-end.layouts.master')

@section('content')
    <table id="" class="display" style="width:100%">
        <thead>
        <tr>
            <th>Name</th>
        </tr>
        </thead>
        <tbody>
        @forelse($doctors as $doctor)
            <tr>
                <td>{{ $doctor->first_name }}</td>
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
        $(document).ready(function (){
            $('table.display').DataTable();
        })
    </script>
@endpush
