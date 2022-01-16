@extends('user.master')

@section('title')
E-Foodies | Verify your E-Mail First Please!
@endsection

@section('content')
<div class="container">
    <div class="row text-center justify-content-center">
        <div class="card mt-lg-5 mb-lg-5">
            <div class="card-body">
                <i class="fas fa-user"></i>
                <h5>Verify Your Email First Please!</h5>
                <hr>
                @if(session('status'))
                <div class="alert alert-success" role="alert">{{session('status')}}</div>
                @endif
                <p>Click the Button to Resend</p>
                <form method="POST" action="{{route('verification.send')}}">
                    @csrf
                    @method('POST')
                    <button type="submit" class="btn btn-sm btn-dark">Resend Email</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection