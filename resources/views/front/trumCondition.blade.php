@extends('layouts.website')
@section('content')

<!-- Titlebar
================================================== -->
<div id="titlebar" class="gradient">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<h2>Terms And Conditions</h2>

				<!-- Breadcrumbs -->
				<nav id="breadcrumbs" class="dark">
					<ul>
						<li><a href="#">Home</a></li>
						<li><a href="#">Pages</a></li>
						<li>Terms And Conditions</li>
					</ul>
				</nav>

			</div>
		</div>
	</div>
</div>


<!-- Content
================================================== -->


<!-- Container -->
<div class="container">
	<div class="row">

		<div class="col-xl-12">
			<div class="margin-bottom-50" style="padding: 20px; border:1px solid#dcdcdc">
					{!! $gn->tNc !!}
			</div>
		</div>


	</div>
</div>
<!-- Container / End -->

@endsection

