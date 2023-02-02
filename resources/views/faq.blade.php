@extends('layouts.master')

@section('content')



    <div class="pagetitle">
      <h1>Frequently Asked Questions</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          
          <li class="breadcrumb-item active">Frequently Asked Questions</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section faq">

    
      <div class="row">
        <div class="col-lg-6">

          <div class="card basic">
            <div class="card-body">
              <h5 class="card-title">Basic Questions</h5>

              <div>
                <h6>1. Why Do I need to create an account?</h6>
                <p>You may want to create an account so that you can save your preferred emojis and symbols and access them later. Additionally, an account can also provide you features such as the ability to edit or delete saved emojis, or to share them with others. Additionally, it can help you personalize the your experience.</p>
              </div>

              <div class="pt-2">
                <h6>2. How do I save my symbols and emojis?</h6>
                <p>To save symbols and emojis on your website, users will first need to create an account. Once they have done so, they can use the search bar to find specific symbols or emojis, or scroll through different pages to browse the available options. When they find a symbol or emoji they like, they can simply click a "save" button. This will add the symbol or emoji to their "saved symbols" page, where they can access and manage them later.</p>
              </div>

              <div class="pt-2">
                <h6>3. How do I use the emojis?</h6>
                <p>To use the symbols and emojis, users can simply click on the symbol or emoji they would like to use. Once clicked, it should automatically copy the symbol or emoji to the user's clipboard. The user can then paste the symbol or emoji into a text field or chat box in another application. </p>
              </div>

            </div>
          </div>

        

        </div>

        <div class="col-lg-3">

          <!-- F.A.Q Group 2 -->
          
           <b> <h5 class="">Try It Here!</h5></b>
             

              <div class="row">
      @foreach($codes as $code)
        <div class="col-auto mb-3 align-items-center ">
         
            <div class="card " style="width: 25rem; height: 26rem;">
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

          </div><!-- End F.A.Q Group 2 -->

<br>
<br>
<br>
<br>
<br>
<br>
<style>



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


         

     

    
    </section>




@endsection