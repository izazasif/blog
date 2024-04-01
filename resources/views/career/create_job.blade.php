@extends('layout.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message') }}
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-warning alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                    @foreach ($errors->all() as $error)
                        <li><span class="glyphicon glyphicon-alert" aria-hidden="true"></span> &nbsp;{{ $error }}
                        </li>
                    @endforeach
                </div>
            @endif
            <div class="row">
                <!-- left column -->
                <div class="col-md-12 col-lg-12">
                    <!-- general form elements -->
                    <div class="box box-primary">
                        <div class="box-header with-border">
                            <h3 class="box-title">Create Job </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{route('career.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Job Title</label>
                                    <input type="text" name="job_title" class="form-control"required>
                                    @if ($errors->has('blog_image'))
                                        <span class="text-danger">{{ $errors->first('blog_image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Category Name</label>
                                    <input type="text" name="category_name" class="form-control" id="exampleInputEmail1"
                                        placeholder="Writer Name" required>
                                    @if ($errors->has('writer_name'))
                                        <span class="text-danger">{{ $errors->first('writer_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Description </label>
                                    <textarea id="example"  rows="10" name="job_description" cols="80">
                                    </textarea>
                                    @if ($errors->has('blog_description'))
                                        <span class="text-danger">{{ $errors->first('blog_description') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Valid Till </label>
                                    <input type="date" name="valid_till" class="form-control" id="exampleInputEmail1"
                                        placeholder="Writer Name" required>
                                    @if ($errors->has('blog_titile'))
                                        <span class="text-danger">{{ $errors->first('blog_titile') }}</span>
                                    @endif
                                </div>
                                
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" onclick="submitForm(this);"><i class="fa fa-save"></i> Save</button>
                                
                            </div>
                        </form>
                    </div>
                    <!-- /.box -->
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
        function submitForm(btn) {
        // disable the button
        btn.disabled = true;
        // submit the form    
        btn.form.submit();
    }
    var editor = new FroalaEditor('#example', {
                useClasses: false
                });
    </script>
@endsection
