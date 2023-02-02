@extends('layouts.master')

@section('content')
    @if (!is_null($single))
    <section class="section dashboard" >
    <div class="pagetitle">
  <h1>Search</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item ">Search</li>
   
    </ol>
  </nav>
</div><!-- End Page Title -->


   
            @foreach($single as $sing)
        <div class="col-auto mb-3 align-items-center ">
         
            <div class="card " style="width: 25rem; height: 25rem;">
                <div class="card-body text-center" >
                    <h6 class="card-title align-items-center" name="name">{{$sing->name}}</h6>
                    <h7 class="card-subtitle mb-2 text-muted" name="category">{{$sing->category}}</h7>
                    <p id="a" onclick="copy(this)" class="card-text" style="font-size:100px" name="code"><?php echo $sing->code ?></p>
                    <div class="flex-grow-1"></div>
                    <div class="m-5">
                  <livewire:toggle-button :code-id="$sing->id" class="favourite-button" :key="$sing->id" />

                  </div>
    
                </div>
                
            </div>
           
            
        </div>



        @endforeach

        <style>

.card:hover{
    box-shadow: 8px 8px 8px blue;
    transform:scale(1.1);
}

input, button, submit{
  border:none;
  border: none;
	padding: 0;
  font: inherit;
	cursor: pointer;
	outline: inherit;
  background: none;
	color: inherit;
  font-size: 25px;
  color: red;
} 

.favourite-button {
    position: absolute;
    bottom: 0;
}






</style>
           

<script>
         function copy(that){
var inp =document.createElement('input');
document.body.appendChild(inp)
inp.value =that.textContent
inp.select();
document.execCommand('copy',false);
inp.remove();
}


function myFunction()
    {
        var change = document.getElementById("toggle");
        if (change.value=="off") change.value = "on";
        else change.value = "off";
    }


 </script>

              
<div class="row">
          <div class="col-12 justify-content-center">{{ $single->links() }}</div>
        </div>
                  

</div>


</div>


</section>

</main><!-- End #main -->
    


    @else
        <h2>No records found</h2>
    @endif
@endsection


