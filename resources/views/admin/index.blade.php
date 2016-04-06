@extends('shared.app')

@section('pagetitle')
Admin
@endsection

@section('content')
<div class="row top_tiles">
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-caret-square-o-right"></i>
      </div>
      <div class="count">179</div>

      <h3>Total</h3>
      <p>Number of URLs</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-comments-o"></i>
      </div>
      <div class="count">179</div>

      <h3>Enabled</h3>
      <p>Number of URLs</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-sort-amount-desc"></i>
      </div>
      <div class="count">179</div>

      <h3>Today</h3>
      <p>Number of Visitors</p>
    </div>
  </div>
  <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
    <div class="tile-stats">
      <div class="icon"><i class="fa fa-check-square-o"></i>
      </div>
      <div class="count">179</div>

      <h3>Total</h3>
      <p>Number of Visitors</p>
    </div>
  </div>
</div>
@endsection