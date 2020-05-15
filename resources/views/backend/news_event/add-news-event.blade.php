@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage News & Event</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">News & Event</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-12 ">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add News & Event
                                <a class="btn btn-success float-right " href="{{route('news_events.view')}}"><i class="fa fa-plus">News & Event List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('news_events.store')}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                     <label for="date">Date</label>
                                     <input type="text" name="date" class="form-control" placeholder="YYYY-MM-DD" id="datepicker" readonly >
                                     <font style="color:red">{{($errors->has('date'))?($errors->first('date')):''}}</font>
                                    </div>
                                   <div class="form-group col-md-8">
                                     <label for="short_title">Short Title</label>
                                     <input type="text" name="short_title" class="form-control" id="short_title">
                                     <font style="color:red">{{($errors->has('short_title'))?($errors->first('short_title')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-12">
                                     <label for="long_title">Long Title</label>
                                     <textarea  name="long_title" class="form-control" rows="5"></textarea>
                                     <font style="color:red">{{($errors->has('long_title'))?($errors->first('long_title')):''}}</font>
                                    </div>

                                    <div class="form-group col-md-4">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" class="form-control" id="image">
                                     <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-2" style="padding-top:120px;">

                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>

                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </section>


                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4',
            format :'yyyy-mm-dd'
        });
    </script>

@endsection
