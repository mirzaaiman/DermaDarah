@extends('base')

@section('contentderma')

<h1>Derma</h1>

<h3>Blood Donation Status</h3><br>
<div class="card">
    <div class="card-body p-3">
        <div class="card-header pb-0 p-3">
            <div class="col-lg-5 mb-lg-0 mb-4">
                <label for='nama'>Please insert the number</label><br>
                <input type="text" name="name" class="form-control" placeholder="The ID number of your blood pack"></label><br>
                <button class="btn btn-success" type="submit">SUBMIT</button><br>
            </div>
        </div>
    </div>
</div>
@stop