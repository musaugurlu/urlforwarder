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
      <table id="urlstables" class="table table-striped table-bordered bulk_action">
        <thead>
          <tr class="headings">
            <th><input type="checkbox" id="check-all" class="flat"></th>
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
            <td><input class="flat" type="checkbox" value="1"></td>
            <td>/hello-world</td>
            <td>http://google.com</td>
            <td>1/1/2011</td>
            <td>11:11:01</td>
            <td>8.8.8.8</td>
            <td>519</td>
            <td>3/1/2016</td>
            <td>None</td>
          </tr>
          <tr>
            <td><input class="flat" type="checkbox" value="2"></td>
            <td>/hello-universe</td>
            <td>http://bing.com</td>
            <td>2/2/2012</td>
            <td>12:12:02</td>
            <td>4.4.4.4</td>
            <td>765</td>
            <td>8/10/2016</td>
            <td>9/10/2016</td>
          </tr>
          
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
@endsection