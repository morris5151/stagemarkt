@extends('layouts.base')

@section('content')
<div class="contain">
    <div class="wrap">
        <div class="headerimage" id="stagesimage">
            <div class="centered">
                <h1 style="background-color: #111111; font-weight: bolder; font-size:40px; " >STAGES.</h1>
            </div>
        </div>

    </div>
</div>

    <div class="row row-cols-4" style="display:flex; justify-content:center; margin-top:40px; overflow-y: scroll; height: 400px; ">
    
            @foreach ($internships as $internship)
                <div class="card" style="width: 20rem; border-radius:0; ">
                    <div class="card-body">
                        <h5 style="font-weight:bold;" class="card-title">{{$internship->naam}}</h5>
                        <p class="card-text">{{$internship->plaats}}</p>
                        <p class="card-text">{{$internship->telefoonnummer}}</p>
                        <p class="card-text">{{$internship->email}}</p>
                    </div>
                </div>
            @endforeach
        
    </div>

    


@endsection