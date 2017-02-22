@extends('...app')

@section('content')
	<div class="content">
		<div class="container" style=" padding-left: 20px; padding-right: 20px; padding-top: 0px;">
			@if(Session::has('message'))
				<div class="alert alert-info" role="alert">{{ Session::get('message')}} {{ Session::forget('message') }}</div>
			@endif
			<div class="panel panel-default" style="margin: 5px;">
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					<div class="page-header" style="margin-top: 0px;">
						<h1 style="margin-top: 5px;">Reports</h1>
					</div>
					@if(empty($sensors[0]))
						<h6>No sensors to display.</h6><hr>
					@else
						<div class="table-responsive">

							<table class="table table-striped table-hover table-bordered ">
								<thead>
								<tr>
									<th>#</th>
									<th>Subject</th>
									<th>Status</th>
									<th>Report</th>
									<th>Action</th>
									
								</tr>
								</thead>
								<tr>
            <td>1</td>
            <td>Patrick</td>
            <td>.pdf</td>
            <td>Visit</td>
 
            <!-- actions to take -->
            <td>
                <!-- edit this nerd (uses the edit method found at GET /jedis/{id}/edit -->
                <a class="btn btn-small btn-success" href="">Get Lightsaber Status</a>
                 
                <!-- edit this nerd (uses the edit method found at GET /jedis/{id}/edit -->
                <a class="btn btn-small btn-primary" href="">Toggle Lightsaber</a>
                 
                <!-- show the jedi (uses the show method found at GET /jedis/{id} -->
                <a class="btn btn-small btn-danger" href="">Notify this Jedi</a>
 
            </td>
        </tr>
								<tbody>
								
								</tbody>
							</table>
						</div>
				@endif
				<!-- Button trigger modal -->
					
					<!-- Modal -->
					
				</div>
			</div>
		</div><!-- /.container -->
	</div>
@endsection
