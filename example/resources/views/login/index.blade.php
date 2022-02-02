@extends('layouts.main')

@section('container')
    <div class="row justify-content-center text-center">
        <div class="col-lg-5">
            <main class="form-signin">
                <form>
                    <h1 class="h3 mb-3 fw-normal">Sign In</h1>

                    <div class="form-floating">
                        <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>
                    </div>

                    <button class="w-100 btn mt-3 btn-lg btn-primary" type="submit">Sign in</button>
                    <small class="mt-3 d-block">Not have account? <a href="/register">Register Now!</a></small>
                </form>
            </main>
        </div>
    </div>

@endsection
