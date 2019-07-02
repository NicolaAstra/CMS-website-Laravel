@extends('layouts.app')


@section('content')

        <h1>contact</h1>


    
    

@stop


@section('links')
@if (count($hewan))

      <ul>
                @foreach ($hewan as $binatang)
                  <li><a href="#">{{$binatang}} </a></li>  
                @endforeach
      </ul>          
     
@endif
@endsection