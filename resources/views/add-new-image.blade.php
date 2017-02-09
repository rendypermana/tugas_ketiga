@extends('global-layout')

@section('body')
 

               
<section id="blog" class="padding-top padding-bottom">
   <div class="container">
      <div class="row"> 
         <div class="col-md-6 col-sm-7"> 
            <div class="tambah">                
              @include('error-notification')
               {!! Form::open(['url'=>'/image', 'method'=>'POST', 'files'=>'true']) !!}
                  <div class="form-group">
                     <label for="userfile">Image File</label>
                     <input type="file" class="form-control" name="gambar">
                  </div>

                  <div class="form-group">
                    <label  for="textarea">Title</label>                    
                      <textarea class="form-control" id="textarea" name="title" placeholder="Capltion Here..."></textarea>
                  </div>
                  
                  <button type="submit" class="btn btn-primary">Upload</button>
                  <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>
               {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</section>
   
@stop
