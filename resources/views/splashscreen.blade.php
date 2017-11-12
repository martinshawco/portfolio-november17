@extends('layouts.app')


@section('resources')
	@parent
	<link href="{{ asset('css/pages/splashscreen.css') }}" rel="stylesheet">
	<script src="{{ asset('js/pages/splashscreen.js') }}"></script>
@endsection


@section('content')
	
	<div class="splashscreen_container">
		<div class="splashscreen">
			<div class="ss_logo">
				@component('components.logo')
				@endcomponent
			</div>
			<div class="ss_tagline">
				Experienced Software Engineer &amp; Web Developer building complex client projects of all types &amp; sizes.
				<b>I'm currently seeking graduate employment in the Manchester area.</b>
				{{--<br/>--}}
				{{-- <a href="#" class="ss_tl_continuelink">See my work &rarr;</a> --}}
			</div>
		</div>
	</div>

@endsection