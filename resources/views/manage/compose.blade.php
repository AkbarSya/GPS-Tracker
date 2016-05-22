    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Compose Message</title>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mailbox
            <small>{{Auth::user()->name}}</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Mailbox</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-md-3">
              <a href="{{ url('mail') }}" class="btn btn-primary btn-block margin-bottom">Back to Inbox</a>                          
            </div><!-- /.col -->
            <div class="col-md-9">
              <div class="box box-primary">
                <div class="box-header with-border">
                  <h3 class="box-title">Compose New Message</h3>
                </div><!-- /.box-header -->
                <form action="{{ url('compose')}}" method="POST" >
                {!! csrf_field() !!}
                <div class="box-body">
                  <div class="form-group">
                    <input type="hidden" name="sender" value="{{Auth::user()->email}}">
                    <input class="form-control" placeholder="Email" name="receiver">
                  </div>
                  <div class="form-group">
                    <input type="text" name="receiver_name" class="form-control" placeholder="Name">
                  </div>
                  <div class="form-group">
                    <input class="form-control" placeholder="Subject" name="subject">
                  </div>
                  <div class="form-group">                    
                    <textarea id="compose-textarea" class="form-control" style="height: 300px" name="fill">
                    </textarea>
                  </div>                  
                </div><!-- /.box-body -->
                <div class="box-footer">
                  <div class="pull-right">                    
                    <button type="submit" class="btn btn-primary"><i class="fa fa-envelope-o"></i> Send</button>
                  </div>                  
                </div><!-- /.box-footer -->
              </div><!-- /. box -->              
              </div>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->      
    @endsection
