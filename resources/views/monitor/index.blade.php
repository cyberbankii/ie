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
		<div class="col-xs-12 col-md-4">
			<div class="row">
				<div class="col-md-12">
					<div class="box box-default">
			            <div class="box-header with-border">
			              <h3 class="box-title">Top 10 Impressions (Today)</h3>
			            </div>
			            <div class="box-body">
			              <canvas id="pieImpl" style="height: 277px; width: 555px;" height="554" width="1110"></canvas>
			            </div>
			        </div>
		        </div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="box box-default">
			            <div class="box-header with-border">
			              <h3 class="box-title">Top 10 Spending (Today)</h3>
			            </div>
			            <div class="box-body">
			              <canvas id="pieCost" style="height: 277px; width: 555px;" height="554" width="1110"></canvas>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
		<div class="col-xs-12 col-md-8">
			<div class="box">
	            {{-- <div class="box-header">
	              <h3 class="box-title">All Project</h3>
	            </div> --}}
	            <div class="box-body">
	              <table id="monitor-projects" class="table table-bordered table-striped">
	                <thead>
		                <tr>
		                  <th>Campaigns</th>
		                  <th>Situations</th>
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
      "lengthChange": false,
      "searching": true,
      "ordering": false,
      "info": false,
      "autoWidth": false
    });
    $(function() {
    	var pieImplChartCanvas = $("#pieImpl").get(0).getContext("2d");
	    var pieImplChart = new Chart(pieImplChartCanvas);
	    var PieImplData = [
	      {
	        value: 700,
	        color: "#f56954",
	        highlight: "#f56954",
	        label: "Chrome"
	      },
	      {
	        value: 500,
	        color: "#00a65a",
	        highlight: "#00a65a",
	        label: "IE"
	      },
	      {
	        value: 400,
	        color: "#f39c12",
	        highlight: "#f39c12",
	        label: "FireFox"
	      },
	      {
	        value: 600,
	        color: "#00c0ef",
	        highlight: "#00c0ef",
	        label: "Safari"
	      },
	      {
	        value: 300,
	        color: "#3c8dbc",
	        highlight: "#3c8dbc",
	        label: "Opera"
	      },
	      {
	        value: 100,
	        color: "#d2d6de",
	        highlight: "#d2d6de",
	        label: "Navigator"
	      }
	    ];
	    var pieCostChartCanvas = $("#pieCost").get(0).getContext("2d");
	    var pieCostChart = new Chart(pieCostChartCanvas);
	    var PieCostData = [
	      {
	        value: 700,
	        color: "#f56954",
	        highlight: "#f56954",
	        label: "Chrome"
	      },
	      {
	        value: 500,
	        color: "#00a65a",
	        highlight: "#00a65a",
	        label: "IE"
	      },
	      {
	        value: 400,
	        color: "#f39c12",
	        highlight: "#f39c12",
	        label: "FireFox"
	      },
	      {
	        value: 600,
	        color: "#00c0ef",
	        highlight: "#00c0ef",
	        label: "Safari"
	      },
	      {
	        value: 300,
	        color: "#3c8dbc",
	        highlight: "#3c8dbc",
	        label: "Opera"
	      },
	      {
	        value: 100,
	        color: "#d2d6de",
	        highlight: "#d2d6de",
	        label: "Navigator"
	      }
	    ];
	    var pieOptions = {
	      //Boolean - Whether we should show a stroke on each segment
	      segmentShowStroke: true,
	      //String - The colour of each segment stroke
	      segmentStrokeColor: "#fff",
	      //Number - The width of each segment stroke
	      segmentStrokeWidth: 2,
	      //Number - The percentage of the chart that we cut out of the middle
	      percentageInnerCutout: 50, // This is 0 for Pie charts
	      //Number - Amount of animation steps
	      animationSteps: 100,
	      //String - Animation easing effect
	      animationEasing: "easeOutBounce",
	      //Boolean - Whether we animate the rotation of the Doughnut
	      animateRotate: true,
	      //Boolean - Whether we animate scaling the Doughnut from the centre
	      animateScale: false,
	      //Boolean - whether to make the chart responsive to window resizing
	      responsive: true,
	      // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
	      maintainAspectRatio: true,
	      //String - A legend template
	      legendTemplate: "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>"
	    };
	    pieImplChart.Doughnut(PieImplData, pieOptions);
	    pieCostChart.Doughnut(PieCostData, pieOptions);
    });
</script>
@endsection