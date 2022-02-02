@extends('layouts.main')

@section('content')
    <div class="row justify-content-center text-center" style="margin-top: -2.5em">
        <div class="col-lg-5">
            <main class="form-signin">
                <form>
                    <h1 class="h3 mb-5 fs-2 fw-bold">Sign Up</h1>

                    <div class="form-floating">
                        <input type="text" class="form-control" name="name" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Name</label>
                    </div>
                    <div class="form-floating">
                        <input type="text" name="username" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Username</label>
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
                    <small class="d-block mt-3">Already Register? 
                        <a href="/signin">Sign in</a>
                    </small>
                </form>
            </main>
        </div>
    </div>
@endsection
