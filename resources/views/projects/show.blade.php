@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				    <h2>{{ $project->name }}</h2>
				 
				    @if ( !$project->tasks->count() )
				        Your project has no tasks.
				    @else
				        <ul>
				            @foreach( $project->tasks as $task )
				                <li><a href="{{ route('projects.tasks.show', [$project->slug, $task->slug]) }}">{{ $task->name }}</a></li>
				            @endforeach
				        </ul>
				    @endif
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
