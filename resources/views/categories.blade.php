@extends('category')
@section('content')
<ul>  
@foreach($categories as $category)
<li><a href="{{route("category.get", ["id"=>$category->id])}}">{{$category->name}}</a></li>
 @endforeach
 
</ul>
<form method="POST">
    <div class="form-group">
    <label>Category name</label>
    <input type="text" id="name" name="name" class="form-control" placeholder="Wpisz nazwę kategorii..." onkeyup="validInput()">
    <input type="hidden" name="token" value="{{csrf_token()}}">
    <br/>
    </div>
    <button type="submit" disabled>Add category</button>
    <button type="reset">Cancel</button>
     
</form>
@stop