@extends('layouts.default')  
@section('content')  

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Category</h4>
    </div>
    <div class="card-body">
     <form method="post" action="{{route('message.update',$msg->id)}}">  
       
       @csrf     
       <div class="form-group">      
        <label for="first_name">name</label><br/><br/>  
        <input type="text" class="form-control" name="name" value="{{$msg->name}}"/><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">email</label><br/><br/>  
        <input type="text" class="form-control" name="email" value="{{$msg->email}}"/><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">telephone</label><br/><br/>  
        <input type="text" class="form-control" name="telephone" value="{{$msg->telephone}}"/><br/><br/>  
      </div>

      <div class="form-group">      
        <label for="first_name">message</label><br/><br/>  
        <input type="text" class="form-control" name="message" value="{{$msg->message}}"/><br/><br/>  
      </div>   

      <button type="submit" class="btn-btn" >Update</button>  
    </form>
  </div>
</div>
</div>  

@endsection  