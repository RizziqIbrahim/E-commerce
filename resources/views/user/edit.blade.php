@extends('user.master')

@section('title')
    E-Foodies | Account Details
@endsection

@section('content')
<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card mt-lg-5 mb-lg-5">
            <div class="card-body">
                <i class="fas fa-user"></i>
                <h5>Edit Account Details</h5>
                <hr>
                <div class="mt-5">
                    <form method="POST" action="{{ route('userUpdate') }}">
                        @csrf
                    <div class="form-group mt-4">
                        <label class="mb-2" for="name"><strong>Username</strong></label>
                        <input type="name" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Username" value="{{auth()->user()->name}}" required>
                        @error('name')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mt-4">
                        <label class="mb-2" for="email"><strong>Email Address</strong></label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" value="{{auth()->user()->email}}" required>
                        @error('email')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                        <button class="site-btn text-white mt-lg-5" style="background-color: #ff6600;">Submit Change to Account Details</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection