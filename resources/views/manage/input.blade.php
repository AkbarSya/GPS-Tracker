    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Status Driver</title>    
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Input Order
            <small>Here</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Input</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Input Order here</h3>
                </div><!-- /.box-header -->              
                @if(count($errors) > 0)
                <div class="row">
                  <div class="col s12">
                    <div class="card red darken-1">
                      <div class="card-content white-text">
                        <span class="card-title">Error With Input</span>
                        @foreach($errors->all() as $error)
                          <ul>
                            <li>- {{$error}}</li>
                          </ul>
                        @endforeach
                      </div>
                    </div>
                  </div>
                </div>
                @endif

                <form action="{{url('Input')}}" method="post">
                {!! csrf_field() !!}
                <div class="box-body">
                  <div class="form-group">
                  <label>Driver Name :</label>
                  <select class="form-control" name="driver_id">
                    @foreach($driver_ready as $data)
                    <option value="{{ $data->id }}">
                      {{ $data->nama_driver }}
                    </option>
                    @endforeach
                  </select>
                  <!-- 
                    <input class="form-control" placeholder="Driver Name :" name="driver_name" class="{{ $errors->first('driver_name') ? " invalid" : "" }}" id="driver_name" data-success="complete"> -->
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Company Name :" name="company_name" class="{{ $errors->first('company_name') ? " invalid" : "" }}" id="company_name" data-success="complete">
                  </div>                  
                  <div class="form-group">
                    <textarea class="form-control" style="height: 150px" placeholder="Company Address:" name="company_address" class="{{ $errors->first('company_address') ? " invalid" : "" }}" id="company_address" data-success="complete"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Duration :</label>
                    <div class="input-group">
                      <div class="input-group-addon">
                        <i class="fa fa-clock-o"></i>
                      </div>
                      <input type="text" class="form-control pull-right" id="reservation" name="duration" class="{{ $errors->first('duration') ? " invalid" : "" }}" data-success="complete" autocomplete="off">
                    </div><!-- /.input group -->
                  </div><!-- /.form group -->                  
                    <div class="form-group">
                      <input class="form-control" placeholder="Order Name :" name="nama_barang" class="{{ $errors->first('nama_barang') ? " invalid" : "" }}" id="nama_barang" data-success="complete">
                    </div>      
                    <div class="col-xs-3">
                        <input type="text" class="form-control" placeholder="Total Order :" name="jumlah_barang" class="{{ $errors->first('jumlah_barang') ? " invalid" : "" }}" id="jumlah_barang" data-success="complete">
                    </div>

                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">
                    <button type="submit" class="btn btn-primary"><i class="fa fa-plus-square-o"></i> Send</button>
                  </div>               
                  <a href="{{url('home')}}" class="btn btn-warning">Discard</a>                    
                </div><!-- /.box-footer -->
              </div><!-- /. box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      @endsection