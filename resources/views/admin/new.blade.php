@extends('shared.app')

@section('pagetitle')
New URL
@endsection

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>New URL</h2>
      <div class="clearfix"></div>
    </div>
    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
    <div class="x_content">
       <form class="form-horizontal form-label-left input_mask" method="POST" action="{{url('admin/urls/new')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <input id="enabled" class="checkbox-custom" name="enabled" type="checkbox" checked>
          <label for="enabled" class="checkbox-custom-label">Enabled</label>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <input type="text" name="link" class="form-control has-feedback-left nuform" id="inputSuccess2" placeholder="new_url" maxlength="32" value="{{ old('link') }}">
          <span class="fa fa-home form-control-feedback left" aria-hidden="true">/</span>
          <span class="fa fa-link form-control-feedback right" aria-hidden="true"></span>
        </div>

        <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback">
          <input type="text" name="destination" class="form-control nuform" id="inputSuccess3" placeholder="http://www.Destination.URL" value="{{ old('destination') }}">
          <span class="fa fa-external-link form-control-feedback right" aria-hidden="true"></span>
        </div>
        
        <div class="col-md-12 col-sm-12 col-xs-12 form-group has-feedback">
          <div class="col-md-2 col-sm-4 col-xs-12">
            <input id="expires" class="checkbox-custom nuform" name="expires" type="checkbox">
            <label for="expires" class="checkbox-custom-label">Expires</label>
          </div>
          <div class="col-md-2">
            <input id="expires-date" class="radio-custom nuform nueform" name="expires_group" type="radio" value="Date" checked>
            <label for="expires-date" class="radio-custom-label">Date</label>
          </div>
          <div class="col-md-2">
            <input id="expires-click" class="radio-custom nuform nueform" name="expires_group" value="Hit" type="radio">
            <label for="expires-click" class="radio-custom-label">Hit</label>
          </div>
        </div>
        <div id="exp-date" class="col-md-12 col-sm-12 col-xs-12">
          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" id="exp-date-d">
            <input type="datetime" id="exp-date-i" name="exp_date" class="form-control has-feedback-left nuform nueform" placeholder="Date">
            <span id="exp-date-s" class="fa fa-clock-o form-control-feedback left" aria-hidden="true"></span>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12 form-group has-feedback" id="exp-click-d" style="display:none;">
            <input type="text" name="exp_click" class="form-control has-feedback-left nuform nueform" placeholder="Hit">
            <span id="exp-date-s" class="fa fa-mouse-pointer form-control-feedback left" aria-hidden="true"></span>
          </div>
        </div>
        
        <p>&nbsp;</p>
        
        <div class="ln_solid"></div>
        <div class="form-group">
          <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
            <a href="{{url('/admin/urls')}}" class="btn btn-primary">Cancel</a>
            <button type="submit" class="btn btn-success">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@section('extracss')
<style>
.checkbox-custom, .radio-custom {
    opacity: 0;
    position: absolute;   
}

.checkbox-custom, .checkbox-custom-label, .radio-custom, .radio-custom-label {
    display: inline-block;
    vertical-align: middle;
    margin: 5px;
    cursor: pointer;
}

.checkbox-custom-label, .radio-custom-label {
    position: relative;
}

.checkbox-custom + .checkbox-custom-label:before, .radio-custom + .radio-custom-label:before {
    content: '';
    background: #fff;
    border: 2px solid #ddd;
    display: inline-block;
    vertical-align: middle;
    width: 20px;
    height: 20px;
    padding: 2px;
    margin-right: 10px;
    text-align: center;
}

.checkbox-custom:checked + .checkbox-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    background: rebeccapurple;
    color: #fff;
}

.radio-custom + .radio-custom-label:before {
    border-radius: 50%;
}

.radio-custom:checked + .radio-custom-label:before {
    content: "\f00c";
    font-family: 'FontAwesome';
    color: #bbb;
}

.checkbox-custom:focus + .checkbox-custom-label, .radio-custom:focus + .radio-custom-label {
  outline: 1px solid #ddd; /* focus style */
}
</style>
<!--/ -->
@endsection

@section('extrajs')
<script>
  $(document).ready(function() {
    if($('#enabled').prop('checked')) {
      $('.nuform').prop('disabled','');
      if(! $('#expires').prop('checked')) {
        $('.nueform').prop('disabled','disabled');
      }
    } else {
      $('.nuform').prop('disabled','disabled');
    }
    $('#enabled').change(function() {
      if($('#enabled').prop('checked')) {
        $('.nuform').prop('disabled','');
        if(! $('#expires').prop('checked')) {
          $('.nueform').prop('disabled','disabled');
        }
      } else {
        $('.nuform').prop('disabled','disabled');
      }
    });
    if($('#expires').prop('checked')) {
      $('.nueform').prop('disabled','');
      if($('#expires-date').prop('checked')) {
        $('#exp-click-d').hide();
      } else if ($('#expires-click').prop('checked')) {
         $('#exp-date-d').hide();
      }
    } else {
      $('.nueform').prop('disabled','disabled');
      if($('#expires-date').prop('checked')) {
        $('#exp-click-d').hide();
      } else if ($('#expires-click').prop('checked')) {
         $('#exp-date-d').hide();
      }
    }
    
    $('#expires').change(function() {
      if($('#expires').prop('checked')) {
        $('.nueform').prop('disabled','');
      } else {
        $('.nueform').prop('disabled','disabled');
      }
    });
    $('#expires-click').click(function() {
      $('#exp-date-i').val('');
      $('#exp-date-d').hide();
      $('#exp-click-d').show();
    });
    $('#expires-date').click(function() {
      $('#exp-click-i').val('');
      $('#exp-click-d').hide();
      $('#exp-date-d').show();
    });
  });
</script>
<!-- this should go after your </body> -->
<link rel="stylesheet" type="text/css" href="{{url('css/jquery.datetimepicker.css')}}" / >
<script src="{{url('js/jquery.datetimepicker.full.min.js')}}"></script>
<script>
  $(document).ready(function(){
    $('#exp-date-i').datetimepicker({
      format: 'm/d/Y H:i',
    });
  });
</script>
<script type="text/javascript">

</script>
@endsection