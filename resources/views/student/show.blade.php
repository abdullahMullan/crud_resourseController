@extends('layout.student')
@section('content')
<div class="container mt-3">
    <h3 class="text-certer">Student Data</h3>
    <a href="{{ route('student.index') }} " class="btn btn-danger float-end">Back</a>
    <div class="col-5">
        <p><b>First Name: </b>{{ $data->first_name }}</p>
        <p><b>Lirst Name: </b>{{ $data->lirst_name }}</p>
        <p><b>city : </b>{{ $data->city }}</p>
        <p><b>Email: </b>{{ $data->email }}</p>
    </div>
</div>
@endsection
{{-- <h1>hello</h1> --}}
