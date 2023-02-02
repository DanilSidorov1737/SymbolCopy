@extends('layouts.master')

@section('content')


<div class="pagetitle">
      <h1>Contact</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          
          <li class="breadcrumb-item active">Contact</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section contact">


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







</style>

      <div class="row gy-6">

    

        <div class="col-xl-8">
          <div class="card p-4">
            <form action="/contact/submit" method="post" class="php-email-form">
                @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}" required>
                </div>

                <div class="col-md-6 ">
                <input name="email" type="email" class="form-control" id="Email" value="{{ auth()->user()->email }}">
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject" required>
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                </div>

                <div class="col-md-12 text-center">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>

                  <button type="submit">Send Message</button>
                </div>

              </div>
            </form>
          </div>

        </div>

      </div>

      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      


    </section>




@endsection