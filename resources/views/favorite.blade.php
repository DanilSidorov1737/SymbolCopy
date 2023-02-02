@extends('layouts.master')

@section('content')


    <section class="section dashboard">
    <div class="pagetitle">
  <h1>Favorites</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/home">Home</a></li>
      <li class="breadcrumb-item active">Favorites</li>
    </ol>
  </nav>
</div><!-- End Page Title -->

<div class="pb-5 pt-3">
    <livewire:filter-favorite/>
</div>

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">



            <!-- Reports -->
            
              

                <!-- <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div> -->


                  

                  <div class="container mt-8">
                  <h5 class="card-title">Symbols</h5>
    <div class="row">
      @foreach($codes as $code)
        <div class="col-auto mb-3 align-items-center ">
         
            <div class="card " style="width: 25rem; height: 25rem;">
                <div class="card-body text-center" >
                    <h6 class="card-title align-items-center" name="name">{{$code->name}}</h6>
                    <h7 class="card-subtitle mb-2 text-muted" name="category">{{$code->category}}</h7>
                    <p id="a" onclick="copy(this)" class="card-text" style="font-size:100px" name="code"><?php echo $code->code ?></p>
                    <div class="flex-grow-1"></div>
                    <div class="m-5">
                  <livewire:toggle-button :code-id="$code->id" class="favourite-button" :key="$code->id" />

                  </div>
    

                    
                    
                    
                    
                    
                </div>
                
            </div>
           
            
        </div>
        @endforeach

       
       
        
        
    </div>
</div>

               

                  

</div>



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
          <div class="col-12 justify-content-center">{{ $codes->links() }}</div>
        </div>
                  

</div>




</div>


   







</section>

</main><!-- End #main -->
@endsection