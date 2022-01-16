<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
              <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modal">{{ __('Sign In') }}</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container mt-lg-5 mb-lg-5">
                        @if(Session::has('error'))
                            <div class="alert alert-danger">{{Session::get('error')}}</div>
                        @endif
                        <div class="row justify-content-center">
                            <div class="card col-md-8 p-4">
                                <div class="row">
                                    <div class="col-md-5" style="border-right: 2px solid black;">
                                        <form action="{{ route('login') }}" method="POST" class="mb-3" name="login-form" onsubmit="return validateForm()">
                                            @csrf
                                                <div class="form-group mt-4">
                                                    <label class="mb-2" for="email"><strong>Email Address</strong></label>
                                                    <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" placeholder="Email" required  autofocus>
                                                </div>
                                                <div class="form-group mt-4"> 
                                                    <label class="mb-2" for="password" value="hidden"><strong>Password</strong></label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password"  required>
                                                </div>
                                                <button type="submit" class="btn text-white mt-4" style="background-color: #ff6600;">Login</button>
                                        </form>
                                        <p>Click "Create Account" to Register.</p>
                                    </div>
                                   
                                        <div class="col-md-7 justify-content-center text-center" class="justify-content-center text-center">
                                            <img src="../img/favicon.png" alt="">
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
