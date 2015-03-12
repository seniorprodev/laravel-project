@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
					    <h2>Projects</h2>
						@if ( !$projects->count() )
						    You have no projects
						@else
						    <ul>
						        @foreach( $projects as $project )
						            <li><a href="{{ route('projects.show', $project->slug) }}">{{ $project->name }}</a></li>
						        @endforeach
						    </ul>
						@endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
