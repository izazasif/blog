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
                            <h3 class="box-title">Job Info Edit </h3>
                        </div>
                        <form role="form" method="post" action="{{route('career.update',$data->id)}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Job Titile</label>
                                    <input type="text" name="job_title" value="{{ $data->job_title }}" class="form-control"
                                        id="exampleInputEmail1" placeholder="Account Name" required>
                                    @if ($errors->has('job_title'))
                                        <span class="text-danger">{{ $errors->first('job_title') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Expired On</label>
                                    <input type="date" name="valid_till" value="{{ $data->valid_till }}" class="form-control"
                                        id="exampleInputEmail1" placeholder="Account Name" required>
                                    @if ($errors->has('valid_till'))
                                        <span class="text-danger">{{ $errors->first('valid_till') }}</span>
                                    @endif
                                </div>
                                
                                <div class="form-group">
                                   <label for="exampleInputEmail1">Job Description </label>
                                    <textarea id="example"  rows="10" name="job_description" cols="80">{{$data->job_description}}
                                    </textarea>
                                    @if ($errors->has('job_description'))
                                        <span class="text-danger">{{ $errors->first('job_description') }}</span>
                                    @endif
                                </div>
                            </div>
                            <!-- /.box-body -->
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary" onclick="submitForm(this);"><i
                                        class="fa fa-save"></i> Update </button>
                            </div>
                            {{ method_field('PATCH') }}
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
