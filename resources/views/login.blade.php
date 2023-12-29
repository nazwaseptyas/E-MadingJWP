@extends('layouts/main')

@section('container')
<section id="hero" class="container-fluid">
    <div id="hero-input" class="col-md-5">
        <div class="container crud-container">
            <h4 class="text-left">Welcome Back !</h4>
            <p class="text-left">Login to continue</p>
            <form action="/loginuser" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Email</label>
                    <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                        placeholder="Masukkan Email Anda" style="font-size: 14px;">
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                </div><br>
                <button class="btn btn-danger btn-custom" name="login" type="submit">Login</button>
            </form>
        </div>
    </div>
    <div id="hero-login" class="col-md-5">
        <img src="assets/img/login.png" class="img-fluid" alt="hero banner">
    </div>
</section>
@endsection