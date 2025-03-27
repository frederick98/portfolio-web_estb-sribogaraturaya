@extends('layouts.app')

@section('title', 'Contact Us')

@section('metaTitle')
  <meta name="title" content={{$first->title_tag}}>
@endsection

@section('metaKeyword')
  <meta name="keywords" content="sriboga, pizza hut, marugame udon">
@endsection

@section('metaDesc')
<<<<<<< HEAD
  <meta name="description" content={{$first->meta_description}}>
=======
  <meta name="description" content="PT Sriboga Raturaya is more than happy to assist with any 
  questions or inquiries you may have regarding our food business. ">
>>>>>>> 47d0576d4555ebf64528e12195a19f404b72a88f
@endsection

@section('css') 
	<link rel="stylesheet" href="{{asset('css/contactUs.css')}}" media="screen" />  
	<link rel="stylesheet" href="{{asset('source/nicepage.css')}}" media="screen" />
	<link rel="stylesheet" href="{{asset('source/Contact-Us.css')}}" media="screen" />
@endsection


@section('content')
    <section class="" style="margin: 1% 0 5% 0;">
		<div class="" >
			<div class="row justify-content-start">
				<div class="col-md-5">
					<h1 class="section-title">Let's Get Connected</h1>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					<img class="img-fluid" src="{{asset('images/assets/contactUs/ContactUs_new_110822.webp')}}" alt="Contact PT Sriboga Raturaya now" data-image-width="703" data-image-height="648"/>
				</div>
				<div class="col-md-6 align-self-center">
					<form action="{{route('mailContactUs')}}" method="POST" class="" style="padding: 15px">
						{{ csrf_field() }}
						<div class="form-group">
							<label for="nameField" class="labelField">Name</label>
							<input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="text" id="nameField" name="name" class="textField border-top-0 border-left-0 border-right-0" required/>
						</div>
						<div class="form-group">
							<label for="phoneField" class="labelField">Phone</label>
							<input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="tel" pattern="\+?\d{0,3}[\s\(\-]?([0-9]{2,3})[\s\)\-]?([\s\-]?)([0-9]{3})[\s\-]?([0-9]{2})[\s\-]?([0-9]{2})" id="phoneField" name="phone" class="textField border-top-0 border-left-0 border-right-0" required/>
						</div>
						<div class="form-group">
							<label for="emailField" class="labelField">Email</label>
							<input onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" type="email" id="emailField" name="email" class="textField border-top-0 border-left-0 border-right-0" required/>
						</div>
						<div class="form-group">
							<label for="messageField" class="labelField">Message</label>
							<textarea onCopy="return false" onDrag="return false" onDrop="return false" onPaste="return false" rows="3" cols="50" id="messageField" name="message" class="textField border-top-0 border-left-0 border-right-0" required></textarea>
						</div>
						<div class="form-group">
							<button type="submit" class="btn btn-warning btn-block btn-lg" style="border-radius:30px; width:50%;">Submit</button>
						</div>
						@if(Session::has('success'))
							<div class="alert alert-success" role="alert">
								Thankyou for sending inquiries, we'll reach you soon.
							</div>
						@endif
						@if(Session::has('fail'))
							<div class="alert alert-danger" role="alert">
								Unable to send messages, please check fields and try again.
							</div>
						@endif
						<input type="hidden" value="" name="recaptchaResponse" />
					</form>
				</div>
			</div>
		</div>
	</section>
@endsection


@section('script')
    <script class="u-script" type="text/javascript" src="{{asset('source/jquery.js')}}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{asset('source/nicepage.js')}}" defer=""></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
@endsection('script') 