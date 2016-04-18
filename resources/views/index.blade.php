@extends('template') @section('content')
<div class="container">
 <div class="row">
    <h1> Rabbit database </h1>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>weight</th>
            </tr>
        </thead>
        <tbody>
            @foreach($rabbit as $rab)
            <tr>
                <td>{{ $rab->id }}</td>
                <td>{{ $rab->name }}</td>
                <td>{{ $rab->weight }}</td>
                <td><a href="{{ url('/delete/'.$rab->id) }}">delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>


        <div class="col-md-8 col-md-offset-2">
			<div class="panel panel-primary">
				<div class="panel-heading"><h1>Add new rabbit</h1></div>
		            <div class="panel-body">
						{!! Form::open(['url' => 'add','method' => 'post','class' => 'form-horizontal']) !!}
						<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
							{!! Form::label('name','Name:',['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
							{!! Form::text('name',null,['class' => 'form-control','required'=>'required']) !!}
							@if ($errors->has('name'))
				             	<span class="help-block">
				                	<strong>{{ $errors->first('name') }}</strong>
				                </span>
				           @endif
				           </div>
						</div>

						<div class="form-group{{ $errors->has('weight') ? ' has-error' : '' }}">
							{!! Form::label('weight','Weight:',['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
							{!! Form::number('weight',null,['class' => 'form-control','required'=>'required']) !!}
							@if ($errors->has('weight'))
				             	<span class="help-block">
				                	<strong>{{ $errors->first('weight') }}</strong>
				                </span>
				           @endif
				           </div>
						</div>
						<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
								{!! Form::submit('submit',['class' => 'btn btn-success']) !!}
							</div>
						</div>
						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
