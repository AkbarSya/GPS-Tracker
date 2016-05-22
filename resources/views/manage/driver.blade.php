    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Input Driver</title>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Driver Status
            <small>Here</small>
          </h1>          
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Driver here</h3>
                </div><!-- /.box-header -->              
                <div class="box-body">
                <form action="{{url('status')}}" method="post">
                {!! csrf_field() !!}
                  <div class="form-group">
                    <input class="form-control" name="nama_driver" placeholder="Driver Name :">
                  </div>
                  <div class="form-group">
                    <input class="form-control" name="email" placeholder="Driver Email :">
                  </div>
                    <div class="form-group">
                      <label>Status</label>
                      <select class="form-control" name="status">
                        <option>READY</option>
                        <option>NOT READY</option>
                        <option>ON GOING</option>                         
                      </select>
                    </div>                                    
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Send</button>
                  </div>
                  <button class="btn btn-default"><i class="fa fa-times"></i> Discard</button>
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
    @endsection