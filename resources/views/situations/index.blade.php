@extends('adminlte::layouts.app')
@section('content-header-title')
<section class="content-header">
    <h1>
       	Situations
        {{-- <small>test</small> --}}
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
	            {{-- <div class="box-header">
	              <h3 class="box-title">All Campaigns</h3>
	            </div> --}}
	            <div class="box-body">
	            	<div class="container">
		              <table id="situation-projects" class="table table-bordered table-striped">
		                <thead>
			                <tr>
			                  <th>Situations</th>
			                  <th><center>Sequences</center></th>
			                  <th><center>Created At</center></th>
			                  <th><center>Actions</center></th>
			                </tr>
		                </thead>
		                <tbody>
		                	@for($i=0;$i<20;$i++)
			                <tr>
			                  <td>Weather-Keyword</td>
			                  <td>
			                  	<ul>
			                  		<li>Weather</li>
			                  		<li>Keyword</li>
			                  	</ul>
			                  </td>
			                  <td><center>2017/01/01</center></td>
			                  <td>
			                  	<center>
				                  <a href="/situations/{{$i}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
				                  <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i></button>
				              	</center>
				              </td>
			                </tr>
			                @endfor
		                </tbody>
		              </table>
		            </div>
	            </div>
	        </div>
          </div>
        </div>
	</div>
@endsection
@section('append-scripts')
<script type="text/javascript">
	$('#situation-projects').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
</script>
@endsection