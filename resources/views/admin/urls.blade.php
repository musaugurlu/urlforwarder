@extends('shared.app')

@section('pagetitle')
URLs
@endsection

@section('content')
<div class="col-md-12 col-sm-12 col-xs-12">
  <div class="x_panel">
    <div class="x_title">
      <h2>URLs</h2>
      <div class="clearfix"></div>
    </div>
    <div class="x_content">
      <table id="urlstables" class="table table-striped table-bordered">
        <thead>
          <tr class="headings">
            <th><input type="checkbox" id="check-all" class="all"></th>
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
            <td><input class="check" type="checkbox" value="{{$url->id}}"></td>
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
@endsection

@section('extrajs')
<!-- Datatables-->
<script src="{{url('js/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{url('js/datatables/dataTables.bootstrap.js')}}"></script>
<script src="{{url('js/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{url('js/datatables/buttons.bootstrap.min.js')}}"></script>
<script src="{{url('js/datatables/jszip.min.js')}}"></script>
<script src="{{url('js/datatables/pdfmake.min.js')}}"></script>
<script src="{{url('js/datatables/vfs_fonts.js')}}"></script>
<script src="{{url('js/datatables/buttons.html5.min.js')}}"></script>
<script src="{{url('js/datatables/buttons.print.min.js')}}"></script>
<script src="{{url('js/datatables/dataTables.fixedHeader.min.js')}}"></script>
<script src="{{url('js/datatables/dataTables.keyTable.min.js')}}"></script>
<script src="{{url('js/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{url('js/datatables/responsive.bootstrap.min.js')}}"></script>
<script src="{{url('js/datatables/dataTables.scroller.min.js')}}"></script>
<!-- pace -->
<script src="{{url('js/pace/pace.min.js')}}"></script>
<script>
  var handleDataTableButtons = function() {
      "use strict";
      0 !== $("#urlstables").length && $("#urlstables").DataTable({
        dom: "Bfrtip",
        buttons: [{
          extend: "copy",
          className: "btn-sm"
        }, {
          extend: "csv",
          className: "btn-sm"
        }, {
          extend: "excel",
          className: "btn-sm"
        }, {
          extend: "pdf",
          className: "btn-sm"
        }, {
          extend: "print",
          className: "btn-sm"
        }],
        responsive: !0
      })
    },
    TableManageButtons = function() {
      "use strict";
      return {
        init: function() {
          handleDataTableButtons()
        }
      }
    }();
    TableManageButtons.init();
    $('#urlstables').DataTable();
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#check-all').click(function(){
      $('input:checkbox').prop('checked', $(this).prop('checked'));
    });
  });
</script>
<script type="text/javascript">
  @if(Session::has('snotify'))
    alertify.success(Session::get('snotify'));
  @endif
</script>
@endsection