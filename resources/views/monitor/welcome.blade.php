@extends('app')
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
@section('content')
    <div class="container" style=" padding-left: 20px; padding-right: 20px; padding-top: 0px;">
            <!--
              <div class="b" style="position: absolute; width: 100%; left:0; margin-top: -25px;  background: url('/img/bg.png') no-repeat ;  background-size: cover; border-bottom: solid 1px whitesmoke;">
                <h1 style="color: white;  text-shadow: 1px 1px 1px black;">{{ env('WEBNAME') }}</h1>
                <p class="lead" style="color: whitesmoke; text-shadow: 1px 1px 1px grey;">Smart Wi-Fi Temperature & Humidity Sensor</p>

              </div>
		    --><h1>{{ env('WEBNAME') }}</h1>
        <div class="row">
  <div class="col-md-4">.col-md-4</div>
  <div class="col-md-4">
  <table class="table table-hover">
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
</table>
  </div>
  <div class="col-md-4">.col-md-4</div
  <div class="row">
  <div class="col-md-8"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.7815359527567!2d35.72899821475318!3d-0.24603289982049048!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182a3d57155bd2ef%3A0x7989b77b86a4db5f!2sMolo+Potato+Project+Company%2C+C56%2C+Molo%2C+Kenya!5e0!3m2!1sen!2s!4v1487140058259" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe></div>
  <div class="col-md-4">.col-md-4</div>
</div>
</div>
    </div><!-- /.container -->
@endsection
