@extends("layouts.master")
@section("title","Login")

@section("content")

<div class="container login">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <div>
                <h1 class="text-center fs-5"><b>Login to your account</b></h1>
                <h3 class="text-center fs-6 text-secondary"><b>Welcome back!</b></h3>
            </div>
            <div class="mt-5">
                <form action="/admin/login" method="post">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-4">
                                @if(session("loginError"))
                                    <div class="form-group">
                                        <div class="alert alert-danger" id="loginError">{{ session("loginError") }}</div>
                                    </div>
                                @endif
                                <div class="form-group">
                                    <label for="" class="form-label text-dark">Email</label>
                                    <input type="email" class="form-control" name="email" >
                                </div>
                                <div class="form-group mt-3">
                                    <label for="" class="form-label text-dark">Password</label>
                                    <input type="password" class="form-control" name="password" >
                                </div>
                                <button type="submit" name="login" class="btn btn-primary mt-3 mb-3">Sign In</button>
                            </div>
                            <div class="col-md-4"></div>

                        </div>
                    </div>
               
                </form>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>

@endsection