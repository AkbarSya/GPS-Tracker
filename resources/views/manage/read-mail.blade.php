    @extends('skeleton.skeleton')
    @section('content')
    <title>GPS Tracker | Read Mail</title>    
    <!-- Pop up -->    
   
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Mailbox
            <small>13 new messages</small>
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
              <a href="{{ url('home') }}" class="btn btn-primary btn-block margin-bottom">Back to Home</a>                          
            </div><!-- /.col -->
              <div class="col-md-9">
                <div class="box box-primary">
                  <div class="box-header with-border">
                    <h3 class="box-title">Read Mail</h3>
                    <div class="box-tools pull-right">
                      <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Previous"><i class="fa fa-chevron-left"></i></a>
                      <a href="#" class="btn btn-box-tool" data-toggle="tooltip" title="Next"><i class="fa fa-chevron-right"></i></a>
                    </div>
                  </div><!-- /.box-header -->
                  <div class="box-body no-padding">
                    <div class="mailbox-read-info">
                      <h3>{{ $key->subject }}</h3>
                      <h5>To: {{$key->receiver_name}} <small>< {{$key->receiver}} ></small><span class="mailbox-read-time pull-right">{{Carbon::createFromFormat('Y-m-d H:i:s',$key->created_at)->format('d M, Y < H:i >')}}</span></h5>
                    </div><!-- /.mailbox-read-info -->                    
                    <div class="mailbox-read-message">
                      <p>Hello {{$key->receiver_name}},</p>
                      {!! $key->fill !!}
                      <p>Thanks,<br>Admin <small> < {{$key->sender}} > </small></p>
                    </div><!-- /.mailbox-read-message -->
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <div class="pull-right">
                    <button class="btn btn-default"><i class="fa fa-trash-o"></i> Delete</button>
                    <a href="" data-modal="#modal" class="modal__trigger">Modal 1</a>
        
                      <!-- Modal -->
                      <div id="modal" class="modal modal__bg" role="dialog" aria-hidden="true">
                        <div class="modal__dialog">
                          <div class="modal__content">
                            <h1>Report</h1>
                            <p>Church-key American Apparel trust fund, cardigan mlkshk small batch Godard mustache pickled bespoke meh seitan. Wes Anderson farm-to-table vegan, kitsch Carles 8-bit gastropub paleo YOLO jean shorts health goth lo-fi. Normcore chambray locavore Banksy, YOLO meditation master cleanse readymade Bushwick.</p>
                            
                            <!-- modal close button -->
                            <a href="" class="modal__close demo-close">
                              <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"/><path d="M0 0h24v24h-24z" fill="none"/></svg>
                            </a>
                          </div>
                        </div>
                      </div>

                    </div>                    
                  </div><!-- /.box-footer -->
                </div><!-- /. box -->
              </div><!-- /.col -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->            
    <!-- Page Script -->
    
  @endsection