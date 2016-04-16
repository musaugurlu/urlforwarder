@extends('shared.app')

@section('pagetitle')
Admin
@endsection

@section('content')
<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-share"></i>
      </div>
      <div class="count">179</div>

      <h3>Total</h3>
      <p>Number of URLs</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i>
      </div>
      <div class="count">179</div>

      <h3>Enabled</h3>
      <p>Number of URLs</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-user"></i>
      </div>
      <div class="count">179</div>

      <h3>Today</h3>
      <p>Number of Visitors</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-users"></i>
      </div>
      <div class="count">179</div>

      <h3>Total</h3>
      <p>Number of Visitors</p>
    </div>
  </div>
</div>
<p>&nbsp;</p>
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>URLs Visited Lastly <small></small></h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table class="table table-striped table-responsive table-bordered">
        <thead>
          <tr>
            <th>URL</th>
            <th>Destination</th>
            <th>Date</th>
            <th>Time</th>
            <th>IP</th>
            <th>Hit</th>
            <th>Created at</th>
            <th>Expiration</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>/hello-world</td>
            <td>http://google.com</td>
            <td>1/1/2011</td>
            <td>11:11:01</td>
            <td>8.8.8.8</td>
            <td>519</td>
            <td>3/1/2016</td>
            <td>None</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<p>&nbsp;</p>
@endsection