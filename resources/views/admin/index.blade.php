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
      <div class="count">{{ $b1data }}</div>

      <h3>Total</h3>
      <p>Number of URLs</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i>
      </div>
      <div class="count">{{ $b2data }}</div>

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
            <th>Created Date</th>
            <th>Enable</th>
            <th>Expire</th>
            <th>Expire Type</th>
            <th>Expire Date</th>
            <th>Expire Click</th>
            <th>Hit</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($urls as $url)
            <tr>
            <td>{{$url->link}}</td>
            <td>{{$url->destination}}</td>
            <td>{{$url->created_at->format('m/d/Y')}}</td>
            <td>{{$url->enabled}}</td>
            <td>{{$url->expires}}</td>
            <td>{{$url->expires_group}}</td>
            <td>{{$url->exp_date}}</td>
            <td>{{$url->exp_click}}</td>
            <td>{{$url->total_hit}}</td>
            </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
<p>&nbsp;</p>
@endsection