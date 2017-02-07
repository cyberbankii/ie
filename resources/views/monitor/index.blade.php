@extends('adminlte::layouts.app')
@section('content-header-title')
<section class="content-header">
    <h1>
       	Monitor
    </h1>
    <ol class="breadcrumb">
        <li><a href="/monitor"><i class="fa fa-desktop"></i> Monitor</a></li>
        <li class="active">index</li>
    </ol>
</section>
@endsection
@section('main-content')
	<div class="row">
		<div class="col-xs-12 col-md-4">
			<div class="info-box">
			  <span class="info-box-icon bg-blue"><i class="fa fa-cogs"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">ALL</span>
			    <span class="info-box-number">100</span>
			  </div>
			</div>
		</div>

		<div class="col-xs-12 col-md-4">
			<div class="info-box">
			  <span class="info-box-icon bg-green"><i class="fa fa-play"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">RUNNING</span>
			    <span class="info-box-number">90</span>
			  </div>
			</div>
		</div>

		<div class="col-xs-12 col-md-4">
			<div class="info-box">
			  <span class="info-box-icon bg-yellow"><i class="fa fa-pause"></i></span>
			  <div class="info-box-content">
			    <span class="info-box-text">PAUSE</span>
			    <span class="info-box-number">10</span>
			  </div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-md-12">
			<div class="box">
	            {{-- <div class="box-header">
	              <h3 class="box-title">All Project</h3>
	            </div> --}}
	            <div class="box-body">
	              <table id="monitor-projects" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  <th>Campaigns</th>
		                  <th><center>Situations</center></th>
		                  <th><center>Status</center></th>
		                  <th><center>Period</center></th>
		                  <th><center>Actions</center></th>
		                </tr>
	                </thead>
	                <tbody>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-success"></i>Active</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-yellow margin"><i class="fa fa-pause"></i></button>
			              	</center>
			              </td>
		                </tr>
		                <tr>
		                  <td>AIS-LOVElove</td>
		                  <td>
		                  	<ul>
		                  		<li>Weather-Keyword</li>
		                  		<li>Exchange-Keyword</li>
		                  		<li>Keyword</li>
		                  	</ul>
		                  </td>
		                  <td><center><small class="label label-warning"></i>Pause</small></center></td>
		                  <td><center>2017/01/01 - 2017-05-01</center></td>
		                  <td>
		                  	<center>
			                  <button type="button" class="btn bg-green margin"><i class="fa fa-play"></i></button>
			              	</center>
			              </td>
		                </tr>
	                </tbody>
	              </table>
	            </div>
	        </div>
          </div>
        </div>
	</div>
@endsection
@section('append-scripts')
<script type="text/javascript">
	$('#monitor-projects').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": true
    });
</script>
@endsection