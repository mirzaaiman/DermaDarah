
@extends('base')

@section('contentuser')

<h1>User</h1>
<h3>Login</h3><br>
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="mb-4">
                        <div class="row">
                            <div class="col-xl-5 col-lg-6 text-center">
                         <label for='nama'>Please insert your username</label>
                         <input type="text" class="form-control"name="name"  placeholder="Your username"></label><br>
                         <label for='psswd' >Please insert your password</label>
                         <input type="text" class="form-control"name="password"  placeholder="Your password"></label><br>
                         <button class="btn btn-success" type="submit">LOGIN</button><br>

                            <a>Click here to register</a>
                           </div>
                        </div>
                    </div>
                </div>
            </div>   
        </div> 
    </div>
</div>
@stop
