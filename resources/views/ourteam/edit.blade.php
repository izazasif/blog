@extends('layout.master')
@section('content')
    <div class="content-wrapper">
        <section class="content">
            @if (session('message_newsroom'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message_newsroom') }}
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
                            <h3 class="box-title">Newsroom Info Edit </h3>
                        </div>
                        <form role="form" method="post" action="{{route('team.update',$data->id)}}" enctype="multipart/form-data">
                            @csrf
                            
                            <div class="box-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Member Name</label>
                                    <input type="text" name="members_name" value="{{ $data->members_name }}" class="form-control"
                                        id="exampleInputEmail1"  required>
                                    @if ($errors->has('members_name'))
                                        <span class="text-danger">{{ $errors->first('members_name') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Member Designation</label>
                                    <input type="text" name="members_designation" value="{{ $data->members_designation }}" class="form-control"
                                        id="exampleInputEmail1" required>
                                    @if ($errors->has('members_designation'))
                                        <span class="text-danger">{{ $errors->first('members_designation') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
            
                                    <label for="exampleInputEmail1">Member Description </label>
                                    <textarea id="example"  rows="10" name="members_description" cols="80">{{$data->members_description}}
                                    </textarea>
                                    @if ($errors->has('members_description'))
                                        <span class="text-danger">{{ $errors->first('members_description') }}</span>
                                    @endif
                                </div>
                                <div class="form-group">
                                         <label for="exampleInputEmail1">Member Image</label>
                                         <img id="blah" src="{{ asset($data->image) }}" alt="element 05" style="height:100px;width:100px">
                                         <br>
                                         <br>
                                         <span><input accept="image/*" name="image" type='file' id="imgInp" /></span>
                                    @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
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
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'></script>
    <script>
     

            imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                blah.src = URL.createObjectURL(file)
            }
            }



        function submitForm(btn) {
            // disable the button
            btn.disabled = true;
            // submit the form    
            btn.form.submit();
        }

        var editor = new FroalaEditor('#example');
    </script>
@endsection
