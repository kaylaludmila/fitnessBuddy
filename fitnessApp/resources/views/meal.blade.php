@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Enter a food</div>

                <form action="/meal" method="post">
                {{csrf_field() }}
                <br>
                <div class="form-group">
                <label for="name" class="col-sm-1 form-control-label">Food Name:</label>

                <div class="col-sm-10">
                <input type="text" name="name" class="form-control" placeholder="Tell us what you ate" required/>
                </div>
                <button type="submit" value="submit" class="btn bun-primary"> Submit</button>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection