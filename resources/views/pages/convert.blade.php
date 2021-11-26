@extends('layouts.leahsimages')


@section('content')

<h2 class="center">{{$title}} Images</h2>

<ul id="images">
  @foreach($images as $img)
  <li id="imageli{{$img->id}}">
  <span class="hidden imageatts">{{json_encode($img)}}</span>
  <img src="{{$img->thumbpath}}/thumb_{{$img->imagename}}?{{date("Y-m-d H:i:s")}}" alt="{{$img->caption}}" title="{{$img->caption}}"/>
  <div class="caption">{{$img->caption}}</div>
  </li>
  @endforeach
</ul>
 <div class="center" style="clear:both">
  <div id="picker"></div>
 </div>
 
 
 <div class="center" style="clear:both">
<form method="post" action="/addborders/{{$folder->id}}">
  @csrf
  Background color
  <input type="text" name="backgroundcolor" id="backgroundcolor" value="#ff0000" />
  <input class="button btn btn-info" type="submit" value="add borders to images in directory.."></input>
 </form>
  </div>
<div id="picker"></div>

  <script>
  colorPicker = new iro.ColorPicker('#picker', {
  // Set the size of the color picker
  width: 200,
  // Set the initial color to pure red
  color: "#ff0000"
});
colorPicker.on('color:change', function(color) {
    $('#backgroundcolor').val(color.hexString);
});
</script>
@endsection