@extends('default.master')

@section('content')


<div class="element row">
	<div class="large-8 large-centered columns end">
		<h1 id="date" class="text-center">10.17.15</h1>
    	<p id="lead" class="text-center">Nakissa &amp; Dom are getting married and you're invited.<br>
    	Join us October 17th in Kailua-Kona, Hawaii.</p>
		<div class="row">
			<div class="small-12 large-6 small-centered text-center columns end">
				<a href="#" data-reveal-id="firstModal" class="radius button">Wanna get away?</a>
			</div>
		</div>
	</div>
</div>

{{-- Modal Start --}}
<div id="firstModal" class="reveal-modal" data-reveal>
	<h3 id="formHead" class="modal-title text-center">Where should we send your invitation?</h3>
	<hr class="show-for-large-only"/>

{{-- Form Start --}}
{!! Form::open(['route' => 'store']) !!}
<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("ContactName", "Name:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-10 large-8 columns end">
		{!! Form::text("ContactName", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('ContactName', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("Address", "Address:", ["class" => "right inline bld adrs"]) !!}
	</div>
	<div class="small-10 large-8 columns end">
		{!! Form::text("Address", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('Address', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("City", "City:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-10 large-8 columns end">
		{!! Form::text("City", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('City', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("State", "State:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-4 large-3 columns end">
		{!! Form::text("State", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('State', '<small class="error">:message</small>') !!}
		</div>
	</div>
	
	<div class="small-2 large-2 columns">
		{!! Form::label("Zip", "Zip:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-4 large-3 columns">
		{!! Form::text("Zip", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('Zip', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("Email", "Email:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-10 large-8 columns end">
		{!! Form::input("email", "Email", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('Email', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>    

<div class="row">
	<div class="small-2 large-2 columns">
		{!! Form::label("Phone", "Phone:", ["class" => "right inline bld"]) !!}
	</div>
	<div class="small-10 large-8 columns end">
		{!! Form::input("tel", "Phone", null, ["class" => "error"]) !!}
		<div>
			{!! $errors->first('Phone', '<small class="error">:message</small>') !!}
		</div>
	</div>
</div>

<div class="row">
	<div class="small-3 large-2 large-offset-4 columns">
		{!! Form::label("SaveSeat", "Survey", ["class" => "right inline bld text-center"]) !!}
	</div>
	<div class="small-9 large-4 columns end">
		{!! Form::select('SaveSeat', [
			"empty" => "Think you can make it?",
			"Yes" => "YES, can't wait :D",
			"Maybe" => "MAYBE, I'm not sure yet : |",
			"ProbablyNot" => "Sadly, probably not :'("],
			"Think you can make it?") !!}
	</div>
</div>

<div class="row">
	<div class="large-12 small-6 small-centered text-center columns">
		{!! Form::submit("Send", ["class" => "button radius sub"]) !!}
	</div>
</div>
{!! Form::close() !!}
{{-- Form End --}}

{{-- Errors --}}
@include('errors.list')
@if(!$errors->any())
<a class="close-reveal-modal">&#215;</a>
@endif
</div>
{{-- Modal End --}}


@stop
