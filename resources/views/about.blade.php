@extends('layout.app')

@section('title', 'About Me')
@section('content')

	<!-- About -->
	<article id="about">
		<h2 class="major">About Me</h2>
		<span class="image main"><img src="images/glentress.jpg" alt="" /></span>
		<p>I have been working as a Software Engineer since July 2018, after graduating from Cardiff Metropolitan University with a 
			First Class BSc in Software Engineering as well as being awarded Software Engineering Student of the Year in my final year. During
			my time in uni I was able to work in Florence, Italy as a Helpdesk Support Officer in the IT department.
		</p>
		<p>
			Outside of work I'm a big gamer and have built my own gaming PC (specs here if you're interested), I like to keep myself in shape
			by going running and playing football. I'm also a fan of Arsenal Football Club ever since Thierry Henry was there.
		</p>

		<section>
			<h3>PC Specs</h3>
			<div class="table-wrapper">
				<table>
					<thead>
						<tr>
							<th>Component</th>
							<th>Description</th>
						</tr>
					</thead>
				@foreach( $pcSpecs as $spec )
				<tr>
					<td>{{ $spec->component }}</td>
					<td>{{ $spec->description }}</td>
				</tr>
				@endforeach

			</table>
		</section>
	</article>

	<style>
		#bg:after {
	 background-image: url("../../images/penyfan.jpg");
	 filter: blur(3px);
	 }

	 </style>
@endsection
