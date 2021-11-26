@extends('layouts.leahsimages')


@section('content')

<h2 class="center">{{$title}} Images now bordered</h2>

<ul id="images">
  @foreach($images as $img)
  <li id="imageli{{$img->id}}">
  <span class="hidden imageatts">{{json_encode($img)}}</span>
  <img src="{{$img->thumbpath}}/borderedthumb_{{$img->imagename}}?{{date("Y-m-d H:i:s")}}" alt="{{$img->caption}}" title="{{$img->caption}}"/>
  <div class="caption">{{$img->caption}}</div>
  </li>
  @endforeach
</ul>

 
 


  
@endsection