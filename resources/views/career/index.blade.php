@extends('layout.master')
@section('content')
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">ALl Job List</h3>
                                 <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                        <div class="input-group-btn">
                                            <a href="{{ route('career.create') }}">
                                                <button type="button" class="btn btn-primary btn-sm pull-right">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Create New Job
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
                  <th class="text-center">Job Title </th>
                  <th class="text-center">Category </th>
                  <th class="text-center">Expired On </th>
                  <th class="text-center">Status </th>
                  <th class="text-center"> Action </th>
                </tr>
                </thead>
                @php 
                   
                $count=1;

                @endphp
                <tbody>
                  @foreach($data as $job)
                      <tr>
                        <th class="text-center">{{$count++}}</th>
                       
                        <td class="text-center">{{ $job->job_title }}</td>
                        <td class="text-center">{{ $job->category_name }}</td>
                        <td class="text-center">{{ $job->valid_till }}</td>
                       
                        <td class="text-center" style="color:green;font-weight: bold;"> 
                          @if($job->status== 1)
                          
                          <a href="{{route('career.show',$job->id)}}"> Active </a>
                          
                          @else
                          <a href="{{route('career.show',$job->id)}}" style="color:red;"> Inactive </a>
                          
                          @endif
                        </td>
                       
                        <td class="text-center">
                        <a href="{{route('career.edit',$job->id)}}"><i class="fa fa-edit"></i> </a>
                        </td>
                      </tr>
                  @endforeach
                </tfoot>
              </table>
              {!! $data->links() !!}
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