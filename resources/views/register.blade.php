<div class="modal fade" id="reg" tabindex="-1" aria-labelledby="modal" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    <div class="container mt-lg-5 mb-lg-5">
                        <div class="row justify-content-center">
                            <div class="card col-md-8 p-4">
                                <div class="row">
                                    <div class="col-md-5" style="border-right: 2px solid black;">
                                        <form action="{{route('register')}}" method="POST" class="mb-3">
                                            @csrf
                                                <div class="form-group mt-4">
                                                    <label class="mb-2" for="name"><strong>Username</strong></label>
                                                    <input type="name" name="name" class="form-control" id="name" placeholder="Username" required>
                                                </div>
                                                <div class="form-group mt-4">
                                                    <label class="mb-2" for="email"><strong>Email Address</strong></label>
                                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" required>
                                                </div>
                                                <div class="form-group mt-4"> 
                                                    <label class="mb-2" for="password" value="hidden"><strong>Password</strong></label>
                                                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
                                                </div>
                                                <div class="form-group mt-4"> 
                                                    <label class="mb-2" for="password_confirmation" value="hidden"><strong>Password Confirm</strong></label>
                                                    <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Password Confirm" required>
                                                </div>
                                                <button type="submit" class="btn text-white mt-4" style="background-color: #ff6600;">Register</button>
                                        </form>
                                        <p>Click "Sign In" to Login.</p>
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