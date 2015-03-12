@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
				    <h2>
				        {!! link_to_route('projects.show', $project->name, [$project->slug]) !!} -
				        {{ $task->name }}
				    </h2>

				    {{ $task->description }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
