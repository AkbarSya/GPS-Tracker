    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Status Driver</title>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">  
        <div style="border: 1px; padding: 50px;" >  
           <div id="map-canvas" />  
        </div>  
         <div style=" padding: 10px;" >latitude : <input name="_lat" id="_lat" type="text" value="-6.2560672" /></div>  
         <div style=" padding: 10px;" >longitude : <input name="_lng" id="_lng" type="text" value="106.8692862" /></div>           
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Driver Status
            <small>On going</small>
          </h1>          
        </section>
        <!-- Main content -->
        <section class="content">            
            <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Driver On Going</h3>                  
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>ID</th>
                      <th>Driver Name</th>
                      <th>Company Name</th>
                      <th>Location Name</th>
                      <th>Order Name (Total) </th>
                      <th>Confirmed Date</th>
                      <th>Duration Time</th>
                      <th>Find Location</th>
                    </tr>
                    @foreach($input as $key=> $data)
                    <tr>
                      <td>{{$data->id}}</td>
                      <td>{{$data->driver->nama_driver}}</a></td>
                      <td>{{$data->company_name}}</td>
                      <td>{{$data->company_address}}</td>
                      <td>{{$data->nama_barang}} ( {{$data->jumlah_barang}} )</td>
                      <td>{{$data->tanggal_jalan}}</td>
                      <td>{{$data->duration}}</td>
                      <td><a href="location">Find Me!</a></td>
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