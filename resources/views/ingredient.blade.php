@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">What was in your {{$meal->name}}?</div>

                <h3>Ingredients:</h3> 
                <p>{{$meal->ingredients}}</p>

                <form action="/meal/{{$meal->id}}" method="post">
                    {{ csrf_field() }}
                    {{method_field('PUT') }}
                <div class="form-group row">
                    <br>
                    <div class="col-sm-10">
                        <label for="name" class="col-sm-1 form-control-label">Ingredient:</label>
                        <input type="text" name="ingredientName" class="form-control" placeholder="Ingredient Name" required/>
                    </div>
                    <div class="col-sm-10">
                    <br>
                        <label for="name" class="col-sm-1 form-control-label">Protien:</label>
                        <input type="text" name="protein" class="form-control" placeholder="Protien/g" required/>
                    </div>
                    <div class="col-sm-10">
                    <br>
                        <label for="name" class="col-sm-1 form-control-label">Carbohydrates:</label>
                        <input type="text" name="carbohydrates" class="form-control" placeholder="Carbohydrates/g" required/>
                    </div>
                    <div class="col-sm-10">
                        <br>
                        <label for="name" class="col-sm-1 form-control-label">Fat:</label>
                        <input type="text" name="fat" class="form-control" placeholder="Fat/g" required/>
                    </div>
                    <div class="col-sm-10">
                    <br>
                        <button type="submit" value="submit" class="btn bun-primary"> Submit</button>
                    </div>
                </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection