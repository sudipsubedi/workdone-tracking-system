@extends('layouts/main')
@section('body')
<section class="content">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-6">
                            <!-- general form elements -->
                            <div class="box box-primary">
                                <div class="box-header">
                                    <h3 class="box-title">Staff Record Entry</h3>
                                    <a href="{{action('UserController@show')}}"><h3 style="float:right" class="box-title">back</h3></a>
                                </div><!-- /.box-header -->
                                <!-- form start -->
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Personal Number</label>
                                            <input type="text" class="form-control" id="Personal" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Rank</label>
                                            <input type="text" class="form-control" id="Rank" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Name</label>
                                            <input type="text" class="form-control" id="Name" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Address</label>
                                            <input type="text" class="form-control" id="Address" placeholder="">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Phone Number</label>
                                            <input type="text" class="form-control" id="Phone" placeholder="">
                                        </div>


                                        
                                    </div><!-- /.box-body -->

                                    <div class="box-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div><!-- /.box -->

                            <!-- Form Element sizes -->
                            

                            

                            

                        </div><!--/.col (right) -->
                    </div>   <!-- /.row -->
                </section><!-- /.content -->
@stop