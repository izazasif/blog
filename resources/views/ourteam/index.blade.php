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
              <h3 class="box-title">Blog Post List</h3>
                                 <div class="box-tools">
                                    <div class="input-group input-group-sm hidden-xs" style="width: 150px;">
                                        <div class="input-group-btn">
                                            <a href="{{ route('team.create') }}">
                                                <button type="button" class="btn btn-primary btn-sm pull-right">
                                                    <i class="fa fa-plus" aria-hidden="true"></i> &nbsp;Create New Member
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
                  <th class="text-center">Image</th>
                  <th class="text-center">Member's name </th>
                  <th class="text-center">Member's Designation </th>
                  <th class="text-center">Member's Description</th>
                  <th class="text-center"> Status </th>
                  <th class="text-center"> Action </th>
                </tr>
                </thead>
                @php 
                   
                $count=1;

                @endphp
                <tbody>
                  @foreach($data as $member)
                      <tr>
                        <th class="text-center">{{$count++}}</th>
                        <td class="text-center">
                        <img src="{{$member->image}}" alt="element 05" style="height:100px;width:100px">
                        </td>
                        <td class="text-center">{{ $member->members_name }}</td>
                        <td class="text-center">{{ $member->members_designation }}</td>
                        <td class="text-center">{{ $member->members_description }}</td>
                        <td class="text-center" style="color:green;font-weight: bold;"> 
                          @if($member->status== 1)
                          
                          <a href="{{route('team.show',$member->id)}}"> Active </a>
                          
                          @else
                          <a href="{{route('team.show',$member->id)}}" style="color:red;"> Inactive </a>
                          
                          @endif
                        </td>
                       
                       
                        <td class="text-center">
                        <a href="{{route('team.edit',$member->id)}}"><i class="fa fa-edit"></i> </a>
                        
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