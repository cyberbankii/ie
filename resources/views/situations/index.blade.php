@extends('adminlte::layouts.app')
@section('content-header-title')
<section class="content-header">
    <h1>
       	Situations
    </h1>
    <ol class="breadcrumb">
        <li><a href="/situations"><i class="fa fa-desktop"></i> Situations</a></li>
        <li class="active">index</li>
    </ol>
</section>
@endsection
@section('main-content')
	<div class="row">
		<div class="col-xs-12 col-md-12">
		    <div class="right-button" style="float: right;margin-bottom: 8px">
		    	<a href="/situations/create" class="btn btn-primary"><b>Add New</b></a>
		    </div>
	    </div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="box">
	            <div class="box-body">
	            	<div class="container" style="margin-top: 30px">
		              <table id="campaign-projects" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			                  <th>Name</th>
			                  <th><center>Option</center></th>
			                  <th><center>Created At</center></th>
			                  <th><center>Actions</center></th>
			                </tr>
		                </thead>
		                <tbody>
		                	@foreach($situations as $situation)
			                <tr>
			                  <td>{{ $situation->name }}</td>
			                  <td>
			                  	<ul>
			                  		@foreach($situation->options as $option)
			                  		<li>{{ $option->name }}</li>
			                  		@endforeach
			                  	</ul>
			                  </td>
			                  <td><center>{{ $situation->updated_at }}</center></td>
			                  <td>
			                  	<center>
				                  <a href="/situations/{{ $situation->id }}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
				                  <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#deleteModal" data-id="{{ $situation->id }}">
                                       <i class="fa fa-trash"></i></a>
				              	</center>
				              </td>
			                </tr>
			                @endforeach
		                </tbody>
		              </table>
		            </div>
	            </div>
	        </div>
          </div>
        </div>
	</div>
	<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Delete</h4>
	      </div>
	      <div class="modal-body">
	        Are you want to delete it ?
	      </div>
	      <div class="modal-footer">
	        <form id="deleteForm" action="" method="post" accept-charset="utf-8">
	            {{ csrf_field() }}
	            <button type="button" data-dismiss="modal">Close</button>
	            <button type="submit">
	            <input type="hidden" name="_method" value="DELETE">Delete
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
@endsection
@section('append-scripts')
<script type="text/javascript">
	$('#campaign-projects').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
    $('#deleteModal').on('show.bs.modal', function(e) {
        let link = e.relatedTarget;
        let id = link.getAttribute('data-id');
        let modal = $(this);
        modal.find("#deleteForm").attr('action', '/situations/'+id);
    });
</script>
@endsection