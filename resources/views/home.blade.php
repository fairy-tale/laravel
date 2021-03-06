@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
		    @if (count($users) > 0)
			<div class="panel panel-default">
			    <div class="panel-heading">
				Current Trainers
			    </div>

			    <div class="panel-body">
				<table class="table table-striped task-table">

				    <!-- Table Body -->
				    <tbody>
					<tr>
					<td> Name</td>
					<td> Hometown</td>
					<td> Pokemon</td>
					<td> Action</td>
					<td> Admin</td>
					</tr>
				        @foreach ($users as $user)
				            <tr>
				                <!-- Task Name -->
				                <td class="table-text">
				                    <div>{{ $user->name }}</div>
				       		</td>
						<td class="table-text">					    						<div>{{$user->hometown}} </div>
						</td>
						<td class="table-text">					    						<div>{{$user->pokemon->name}} </div>
						</td>
				                <td>
						@if (Auth::user()->id === $user->id)
				                                <button onclick="window.location.href = '{{url('/edit-profile',[])}}'" class="btn btn-danger">
                <i class="fa fa-trash"></i> Edit
            </button>
@endif
				                </td>
						<td class="table-text">					    						<div>{{$user->isAdmin? 'Yes':'No'}} </div>
				                </td>
				            </tr>
				        @endforeach
				    </tbody>
				</table>
			    </div>
			</div>
		    @endif
        </div>
    </div>
</div>
@endsection
