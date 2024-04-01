@extends('template')
@section('main')
    <h2>hi, {{ Auth::user()->name }}</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure sint cum, tenetur voluptatibus nostrum exercitationem
        porro nam vitae cumque quisquam libero. Maiores rerum dolore id. Repudiandae repellendus porro illo inventore.</p>
@endsection
