@extends('layout.student')
@section('content')
    <div class="container mt-3">
        <div class="row">
            <div class="col-3">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">FirstName:</label>
                        <input type="text" class="form-control" placeholder="enter your first _name" name="first_name">
                    </div>
                    <div class="form-group">
                        <label for="lirst_name">LastName:</label>
                        <input type="text" class="form-control" placeholder="enter your lirst _name" name="last_name">
                    </div>
                    <div class="form-group">
                        <label for="city">City:</label>
                        <input type="text" class="form-control" placeholder="enter your city" name="city">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" placeholder="enter your email" name="email">
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
