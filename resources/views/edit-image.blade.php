@extends('global-layout')

@section('body')
<section id="blog" class="padding-top padding-bottom">
    <div class="container">
      <div class="row">
         <div class="col-md-4 col-sm-5"> 
            <div class="tambah">
                  

                  <img src="/image_uploads/{{$image->image}}" height="150" class="img-responsive" />
                  
                  
            </div>
         </div>

         <div class="col-md-8 col-sm-7">
            <div class="tambah">
            @include('error-notification')
                  {!! Form::model($image,['url' => '/image/'.$image->id_image, 'method' => 'PUT', 'files'=>true]) !!}
               <div class="form-group">
                  <label for="gambar">Image File</label>
                     {!! Form::file('/image',null,['class'=>'form-control', 'name'=>'gambar']) !!}
               </div>

               <div class="form-group">
                  <label  for="title">Title</label>
                     {!! Form::textarea('title',null,['class'=>'form-control', 'name'=>'title']) !!}
               </div>
                  <button type="submit" class="btn btn-primary">Save</button>
                  <a href="{{ url('/image') }}" class="btn btn-warning">Cancel</a>
            {!! Form::close() !!}
            </div>
         </div>
      </div>
   </div>
</section>
@stop
