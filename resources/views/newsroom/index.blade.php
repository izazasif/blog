@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
    @if (session('message'))
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <h4><i class="icon fa fa-check"></i> Success!</h4>
                    {{ session('message') }}
                </div>
      @endif
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Newsroom Post List</h3>
                                 <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                        <div class="input-group-btn">
                                            <a href="{{ route('newsroom.create') }}">
                                                <button type="button" class="btn btn-primary btn-sm pull-right">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Create New News Event
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                  </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th class="text-center">Serial No </th>
                  <th class="text-center">Banner</th>
                  <th class="text-center">Newsroom Title</th>
                  <th class="text-center">Newsroom Description</th>
                  <th class="text-center"> Status </th>
                  <th class="text-center"> Action </th>
                </tr>
                </thead>
                @php 
                   
                $count=1;

                @endphp
                <tbody>
                  @foreach($data as $newsroom)
                  <?php 
                    $description = $newsroom->newsroom_description;
                    $search = array("Powered by");
                    $replace = array(" ");
                    $new_string = str_replace($search, $replace, $description);
                    $search1 = array("Froala Editor");
                    $replace = array(" ");
                    $new_string1 = str_replace($search1, $replace, $new_string);
                    $new_tag = strip_tags($new_string1);
                   ?>
                      <tr>
                        <th class="text-center">{{$count++}}</th>
                        <td class="text-center">
                        <img src="{{$newsroom->banner}}" alt="element 05" style="height:100px;width:100px">
                        </td>
                        <td class="text-center">{{ $newsroom->newsroom_title }}</td>
                        <td class="text-center">{{ $new_tag }}</td>
                        <td class="text-center" style="color:green;font-weight: bold;"> 
                          @if($newsroom->status== 1)
                          
                          <a href="{{route('newsroom.show',$newsroom->id)}}"> Active </a>
                          
                          @else
                          <a href="{{route('newsroom.show',$newsroom->id)}}" style="color:red;"> Inactive </a>
                          
                          @endif
                        </td>
                       
                       
                        <td class="text-center">
                        <a href="{{route('newsroom.edit',$newsroom->id)}}"><i class="fa fa-edit"></i> </a>
                        
                        </td>
                      </tr>
                  @endforeach
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>    
@endsection