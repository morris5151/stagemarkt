@extends('layouts.base')

@section('content')

<div class="contain">
    <div class="wrap">
        <div class="headerimage" id="stagesimage">
            <div class="centered">
                <h1 style="background-color: #111111; font-weight: bolder; font-size:40px; " >DASHBOARD.</h1>
            </div>
        </div>

    </div>
</div>
<div class="container">
    <div class="mid">
        <Div class="box">
        <h1 class="boxtext">Breda</h1>
            <h1>{{ $totalBreda }}</h1>
        </div>
        <Div class="box">
        <h1 class="boxtext">Oosterhout</h1>
        <h1>{{ $totalOosterhout }}</h1>
        </div>
        <Div class="box">
        <h1 class="boxtext">Roosendaal</h1>
        <h1>{{ $totalRoosendaal }}</h1>
        </div>
        <Div class="box">
            <h1 class="boxtext">Etten-Leur</h1>
            <h1>{{ $totalEttenleur }}</h1>
        </div>
    </div>
</div>
<div class="createbutton">
    <a href="/create" class="create">Bedrijf Toevoegen</a>
</div>

    

    


@endsection