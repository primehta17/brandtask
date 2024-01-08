@extends('layout')

@section('main-content')
<div>
    <div class="float-start">
        <h4 class="pb-3">Create User</h4>
    </div>
    <div class="float-end">
        <a class="btn btn-info">
            All Users
        </a>
    </div>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="col-md-6">
        <div class="card card-body bg-light p-4">
            <form action="{{ route('createprofile') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone No.</label>
                            <input type="number" class="form-control" id="phone" name="phone" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <textarea type="text" class="form-control" id="address" name="address" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" class="form-control" id="country" name="country" required>
                        </div>
                        <div class="mb-3">
                            <label for="state" class="form-label">State</label>
                            <input type="text" class="form-control" id="state" name="state" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" class="form-control" id="city" name="city" required>
                        </div>
                        <div class="mb-3">
                            <label for="pin" class="form-label">Pin Code</label>
                            <input type="text" class="form-control" id="pin" name="pin" required>
                        </div>
                    </div>
                </div>
                <!-- <a href="{{ route('index') }}" class="btn btn-secondary mr-2"><i class="fa fa-arrow-left"></i>
                    Cancel</a> -->

                <!-- <button type="submit" class="btn btn-success">
                    <i class="fa fa-check"></i>
                    Save
                </button> -->
                <button type="submit" class="btn btn-success full-length-btn">
                    Submit
                </button>
            </form>

            @if (session()->has('status'))
            <div class="alert alert-success mt-3">
                {{session('status')}}
            </div>
            @endif
        </div>


    </div>
    <div class="col-md-6">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($profiles as $profile)
                <tr>
                    <th scope="row">{{$profile->id}}</th>
                    <td>{{$profile->name}}</td>
                    <td>{{$profile->email}}</td>
                    <td>{{$profile->phone}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection