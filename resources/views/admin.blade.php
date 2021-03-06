
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-sm-offset-2 col-sm-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    New Pokemon
                </div>

                <div class="panel-body">

                    <!-- New Pokemon Form -->
                    <form action="{{ url('/admin')}}" method="POST" class="form-horizontal">
                        {{ csrf_field() }}

                        <!-- Pokemon Name -->
                        <div class="form-group">
                            <label for="pokemon-name" class="col-sm-3 control-label">Pokemon</label>

                            <div class="col-sm-6">
                                <input type="text" name="name" id="pokemon-name" class="form-control" value="{{ old('pokemon') }}">
                            </div>
                        </div>

                        <!-- Add Pokemon Button -->
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-6">
                                <button type="submit" class="btn btn-default">
                                    <i class="fa fa-btn fa-plus"></i>Add Pokemon
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Current Pokemons -->
            @if (count($pokemons) > 0)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Current Pokemons
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped task-table">
                            <thead>
                                <th>There are {{count($pokemons)}} Pokemon in the system</th>
                                <th>&nbsp;</th>
                            </thead>
                            <tbody>
				<tr>
				<td><div>Pokemon</div></td>
				<td><div>Name</div></td>
				</tr>
                                @foreach ($pokemons as $pokemon)
                                    <tr>
                                        <td class="table-text"><div>{{$pokemon->id}}</div></td>
					<td class="table-text"><div>{{$pokemon->name}}</div></td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection
