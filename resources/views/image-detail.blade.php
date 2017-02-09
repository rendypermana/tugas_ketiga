@extends('global-layout')

@section('content')
   <form class="form-horizontal">

   	 <img src="/image_uploads/{{$image->image}}" height="150" />
     <div class="form-group">
       <label class="col-sm-2 control-label">Title</label>
       <div class="col-sm-10">
         <p class="form-control-static">{{ $image->title }}</p>
       </div>
     </div>

      <a href="{{ url('/image/'.$image->id.'/edit') }}" class="btn btn-warning">Edit</a>
      <a href="{{ url('/image') }}" class="btn btn-warning">&lt;Back</a>
      
   </form>
@stop