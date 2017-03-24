@extends('adminlte::layouts.app')
@section('content-header-title')
<section class="content-header">
    <h1>
       	Situations
    </h1>
    <ol class="breadcrumb">
        <li><a href="/situations"><i class="fa fa-tasks"></i> Situations</a></li>
        <li class="active">create</li>
    </ol>
</section>
@endsection
@section('main-content')
<div class="container">
	<div class="row" style="background-color: white; padding-top: 50px; padding-bottom: 20px">
		<div class="col-md-offset-1 col-md-10">
			<form action="/situations" method="POST" role="form">
				{{ csrf_field() }}
				<div class="form-group">
				    <label for="name"><b>Name</b></label>
				    <input type="text" class="form-control" name="name" placeholder="Name">
				</div>
				<div class="form-group">
				    <label for="name"><b>API</b></label>
				    <select name="api" id="input" class="form-control">
				    	<option value="0">Please select API</option>
				    	@foreach($apis as $api)
				    	<option value="{{ $api->id }}">{{ $api->name }}</option>
				    	@endforeach
				    </select>
				</div>
				<div class="form-group">
					<label for="options"><b>Options</b></label>
					<div class="checkbox" id='options' style="margin-top: -2px"></div>
				</div>
				<div class="form-group pull-right">
				  	<button type="submit" class="btn btn-default">Save</button>
				  	<button type="button" class="btn btn-default">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>
@endsection
@section('append-scripts')
<script type="text/javascript">
$('select[name="api"]').on('change', function() {
	let apiId = $(this).val();
	$.ajax('/api/'+apiId+'/options').done(function(data) {
		buildOptions(data);
	});
});

function buildOptions($options) {
	let html = '';
	for(let index in $options['options']) {
		html += '<label>\
					<input type="checkbox" name="options[]" value="'+$options['options'][index]['id']+'">'
						+$options['options'][index]['name']+'\
					</label><br>';
	}
	$('#options').html(html);
}
</script>
@endsection