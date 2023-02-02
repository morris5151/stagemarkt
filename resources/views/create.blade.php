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
<div class="container" style="display: flex; justify-content:center;">
<div class="card" id="formcard" style="width:30%; margin-top:40px; border-radius: 0; border: none; ">
    
    <div class="card-body">
      <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{ route('create') }}" enctype="multipart/form-data">
       @csrf
            <div class="form-group">      
                <label style="margin-top: 0px;" for="naam">Naam</label>
                <input type="text" id="naam" name="naam" class="form-control" required="">
            </div>
            <div class="form-group" > 
              <label for="plaats" >Plaats</label>
               <select name="plaats" id="plaats" class="form-control" >
                    <option value="Breda">Breda</option>
                    <option value="Oosterhout">Oosterhout</option>
                    <option value="Roosendaal">Roosendaal</option>
                    <option value="Etten-leur">Etten-Leur</option>
                </select>
            
            </div>
          
          
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
          <label for="telefoonnummer">Telefoonnummer</label>
          <input type="text" id="telefoonnummer" name="telefoonnummer" class="form-control" required="">
        </div>   
        <button type="submit" style="margin-top:20px; background-color:#111111; color:white; border-radius:0; border:none; font-weight:bold;" class="btn btn-info">Toevoegen</button>
      </form>
    </div>
  </div>
</div>  
</div>


    


@endsection