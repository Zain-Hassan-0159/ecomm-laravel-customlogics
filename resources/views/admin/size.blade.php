@extends('admin/layout')
@section('page_title', 'Size')
@section('size_select', 'active')
@section('container')
{{session('message')}}
<h1 class="mb-5">Size</h1>
<a href="{{url('admin/size/manage_size')}}">
    <button class="btn btn-success">Add Size</button>
</a>
<div class="row m-t-30">
    <div class="col-md-12">
        <!-- DATA TABLE-->
        <div class="table-responsive m-b-40">
            <table class="table table-borderless table-data3">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Size</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $list)
                    <tr>
                        <td>{{$list->id}}</td>
                        <td>{{$list->size}}</td>
                        <td>
                         <a class="btn btn-secondary" href="{{url('admin/size/manage_size/')}}/{{$list->id}}">Edit</a>
                        @if($list->status==1)
                            <a class="btn btn-success" href="{{url('admin/size/status/0')}}/{{$list->id}}">Active</a>
                        @elseif($list->status==0)
                            <a class="btn btn-warning" href="{{url('admin/size/status/1')}}/{{$list->id}}">Deactive</a>
                        @endif
                         <a class="btn btn-danger" href="{{url('admin/size/delete/')}}/{{$list->id}}">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- END DATA TABLE-->
    </div>
</div>
@endsection