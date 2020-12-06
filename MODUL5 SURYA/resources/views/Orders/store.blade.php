@extends('layout/main')

@section('title', 'Order Item')

@section('container')

<h4>$orders->name</h4>

<div class="container mt-5">
    <div class="row align-items-center justify-content-center" style="background-color:#ebeced">
        <div class="col pt-5 pb-5 pr-5 pl-5" style="background-color:white">
            <h3 class="pb-3 text-center"> Login </h3>
            <form action="login-process.php" method="post" enctype="multipart/form-data">
                <div class="form-group row">
                    <label for="areaAlamat" class="col-sm-4 col-form-label">E-Mail</label>
                    <div class="col-sm-8">
                        <input name="inputAlamat" type="text" class="form-control" id="areaAlamat" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-4 col-form-label">Password</label>
                    <div class="col-sm-8">
                        <input name="inputPassword" type="password" class="form-control" id="inputPassword" value="">
                    </div>
                </div>
                <fieldset class="form-group row">
                    <div class="col-sm-8">
                        <label class="form-check-label">Remember Me </label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" name="" value="remember">
                        </div>
                    </div>
                </fieldset>
                
                <div class="form-group">
                    <button type="submit" class="btn btn-secondary btn-block">
                        <a href="register.php" style="color:white"> Register </a> </button>
                </div>
                <div class="form-group">
                    <button name="login" type="submit" class="btn btn-primary btn-block">Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection