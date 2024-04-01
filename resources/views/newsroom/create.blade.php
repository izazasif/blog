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
                            <h3 class="box-title">Create new Newsroom Event  </h3>
                        </div>
                        <!-- /.box-header -->
                        <!-- form start -->
                        <form role="form" method="POST" action="{{route('newsroom.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="box-body">
                            <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Banner</label>
                                    <input type="file" name="banner" class="form-control">
                                    @if ($errors->has('banner'))
                                        <span class="text-danger">{{ $errors->first('banner') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control" multiple max="40">
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control"required>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control"required>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control"required>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control"required>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Image</label>
                                    <input type="file" name="image[]" class="form-control"required>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                    @endif
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Newsroom Title</label>
                                    <input type="text" name="newsroom_title" class="form-control" id="exampleInputEmail1"
                                        placeholder="Writer Name" required>
                                    @if ($errors->has('newsroom_title'))
                                        <span class="text-danger">{{ $errors->first('newsroom_title') }}</span>
                                    @endif
                                </div>

                                <div class="form-group">
                                   <label for="exampleInputEmail1">Newsroom Description </label>
                                   
                                   <textarea name="newsroom_description" id="example"></textarea>
                                    @if ($errors->has('newsroom_description'))
                                        <span class="text-danger">{{ $errors->first('newsroom_description') }}</span>
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

    var editor = new FroalaEditor('#example');
    </script>
@endsection
