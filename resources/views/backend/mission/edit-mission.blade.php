@extends('backend.layouts.master')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Manage Mission</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Mission</li>
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
                            <h3>Edit Mission
                                <a class="btn btn-success float-right " href="{{route('missions.view')}}"><i class="fa fa-plus">Mission List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('missions.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                   <div class="form-group col-md-6">
                                     <label for="title">Title</label>
                                     <input type="text" name="title" value="{{$editData->title}}" class="form-control" id="title">
                                     <font style="color:red">{{($errors->has('title'))?($errors->first('title')):''}}</font>
                                    </div>
                                    <div class="form-group col-md-12">
                                     <label for="description">Description</label>
                                     <textarea  name="description" class="form-control" rows="4">{{$editData->description}}</textarea>
                                     <font style="color:red">{{($errors->has('description'))?($errors->first('description')):''}}</font>
                                    </div>

                                    <div class="form-group col-md-6">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" value="{{$editData->image}}" class="form-control" id="image">
                                     <font style="color:red">{{($errors->has('image'))?($errors->first('image')):''}}</font>
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{(!empty($editData->image))?url('public/upload/mission_images/'.$editData->image):url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-2" style="padding-top:120px;">

                                        <input type="submit" value="Update" class="btn btn-primary">
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

@endsection
