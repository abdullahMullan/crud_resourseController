@extends('layout.student')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <form action="{{ route('student.update',$data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="first_name">FirstName:</label>
                        <input type="text" class="form-control" value="{{ $data->first_name }}"  placeholder="enter your first _name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="last_name">LastName:</label>
                        <input type="text" class="form-control" value="{{ $data->last_name }}" placeholder="enter your lirst _name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" value="{{ $data->city }}" placeholder="enter your city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="email">FirstName:</label>
                        <input type="email" class="form-control" value="{{ $data->email }}" placeholder="enter your email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
