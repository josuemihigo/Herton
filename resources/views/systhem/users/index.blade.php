@extends('layoutst')

@section('content')

<!-- contents -->
<div class="profile-cover-wrap overlay-wrap">
	<div class="profile-cover-img" style="background-image:url({{url('dist/img/trans-bg.jpg')}})"></div>
	<div class="bg-overlay bg-trans-dark-60"></div>
	<div class="container profile-cover-content py-50">
		<div class="hk-row">
			<div class="col-lg-6">
				<div class="media align-items-center">
					<div class="media-img-wrap  d-flex">
						<div class="avatar">
							<img src="{{asset('dist/img/avatar12.jpg') }}" alt="user" class="avatar-img rounded-circle">
						</div>
					</div>
					<div class="media-body">
						<div class="text-white text-capitalize display-6 mb-5 font-weight-400">Cecilia Rios</div>
						<div class="font-14 text-white"><span class="mr-5"><span
									class="font-weight-500 pr-5">124</span><span
									class="mr-5">Followers</span></span><span><span
									class="font-weight-500 pr-5">45</span><span>Following</span></span></div>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<div class="button-list">
					<a href="#" class="btn btn-dark btn-wth-icon icon-wthot-bg btn-rounded"><span
							class="btn-text">Message</span><span class="icon-label"><i class="icon ion-md-mail"></i>
						</span></a>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="bg-white shadow-bottom">
	<div class="container">
		<ul class="nav nav-light nav-tabs" id="resume" role="tablist">
			<li class="nav-item">
				<a href="#resume" class="d-flex h-60p align-items-center nav-link">Résumé</a>
			</li>
			<li class="nav-item">
				<a href="#" class="d-flex h-60p align-items-center nav-link">Formation</a>
			</li>
			<li class="nav-item">
				<a href="#upline" class="d-flex h-60p align-items-center nav-link">Upline</a>
			</li>
		</ul>
	</div>
</div>
<div class="tab-content mt-sm-60 mt-30">
	<div class="tab-pane fade show active" role="tabpanel">
		<div class="container">
			@php
			$role=1
			@endphp
			@if ($role=== 0)
			@include('systhem/client')
			@elseif ($role=== 1)
			@include('systhem/super')
			@elseif ($role=== 2)
			@include('systhem/admin')
			@elseif ($role=== 3)
			@include('systhem/Ac')
			@else
			@yield('content')
			@endif

		</div>
	</div>
</div>

<!-- contents -->
@endsection