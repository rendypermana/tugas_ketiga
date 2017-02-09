@extends('global-layout')

@section('body')
 
            @include('error-notification')

<section id="blog" class="padding-top padding-bottom">
        <div class="container">
            <div class="row">  
               <div class="masonery_area">
               @foreach($images as $image)
                     <div class="col-md-3 col-sm-4">
                        <div class="single-blog two-column ">
                           <div class="post-thumb wow scaleIn " data-wow-duration="500ms" data-wow-delay="300ms">
                              <div class="portfolio-single">
                                 <img src="/image_uploads/{{($image->image)}}" class="img-responsive" alt="">
                                 <div class="portfolio-view">
                                    <ul class="nav nav-pills">
                                       <li><a href="{{ url('/image/'.$image->id_image.'/edit') }}" ><i class="fa fa-pencil-square-o"></i></a></li>

                                       {!! Form::open(['url'=>'/image/'.$image->id_image, 'class'=>'pull-left']) !!}
                                       {!! Form::hidden('_method', 'DELETE') !!}
                                       {!! Form::submit('Delete', ['class' => 'btn btn-danger', 'onclick'=>'return confirm(\'Are you sure?\')']) !!}
                                       {!! Form::close() !!}

                                       <li><a href="/image_uploads/{{($image->image)}}" data-lightbox="example-set"><i class="fa fa-eye"></i></a></li>
                                    </ul>
                                 </div>
                                </div>
                                 <div class="post-content overflow">
                                    <p>{{$image->title}}</p>
                                    <div class="post-bottom overflow">
                                    </div>
                                 </div>
                           </div>
                        </div>
                     </div>
               @endforeach
               </div>
            </div>
         </div>
</section>            

@stop
