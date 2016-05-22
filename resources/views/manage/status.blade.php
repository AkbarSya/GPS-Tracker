    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Status Driver</title>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Driver Status
            <small>preview of Driver Status</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Tables</a></li>
            <li class="active">Simple</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="col-md-3">
              <a href="/driver" class="btn btn-primary btn-block margin-bottom">Input Drivers</a>                          
            </div>
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Status Today</h3>                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>No</th>
                      <th>Driver Name</th>
                      <th>Absent Date</th>
                      <th>Status</th>                      
                    </tr>
                    @foreach($driver as $key)
                    <tr>
                      <td>{{ $no++ }}</td>
                      <td>{{$key->nama_driver}}</td>
                      <td>{{Carbon::createFromFormat('Y-m-d H:i:s',$key->created_at)->format('H:i:s d-m-Y')}}</td>
                      <td>
                      @if($key->status=='READY')
                      <span class="label label-success">READY</span>
                      @elseif($key->status=='NOT READY')
                      <span class="label label-danger">NOT READY</span>
                      @elseif($key->status=='ON GOING')
                      <span class="label label-warning">ON GOING</span>
                      @endif
                      </td>                      
                    </tr>
                    @endforeach                            
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div>
          </div>
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    @endsection