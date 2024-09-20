@extends('layout.student')
@section('content')
    <div class="container">
        <h2>Basic Table</h2>
        @if (session()->has('success'))

            <div class="alert alert-info">
                <b>{{ session()->get('success') }}</b>
            </div>
        @endif
        <a href="{{ route('student.create') }}" class="btn btn-info float-end"> add student</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Firstname</th>
                    <th>Lastname</th>
                    <th>city</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $dt)
                <tr>
                    <td>{{ $dt->first_name }}</td>
                    <td>{{ $dt->last_name }}</td>
                    <td>{{ $dt->city }}</td>
                    <td>{{ $dt->email }}</td>
                    <td>
                        <a href="{{ route('student.show',$dt->id )}}" class="btn btn-info">show</a>
                        <a href="{{ route('student.edit',$dt->id )}}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('student.destroy',$dt->id) }}" method="POST" style="display: inline">
                            @csrf
                            @method('DELETE')
                            <input type="submit" value="delete" class="btn btn-danger" onsubmit="confirm('Are you sure you want to delete')">
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
