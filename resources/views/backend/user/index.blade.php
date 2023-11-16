@extends('layouts.admin')
@section('title', 'TẤT CẢ THÀNH VIÊN')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả thành viên</h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="card">
          <div class="card-header">
            <a href="{{ route('user.create') }}" class="btn btn-sm btn-primary">Thêm thành viên</a>
          </div>
          <div class="card-body">
             <table class="table table-bordered" id="mytable">
                <thead>
                    <tr>
                       <th class="text-center" style="width:30px;">
                          <input type="checkbox">
                       </th>
                       <th class="text-center" style="width:130px;">Hình ảnh</th>
                       <th>Họ tên</th>
                       <th>Điện thoại</th>
                       <th>Email</th>
                       <th>Chức năng</th>
                    </tr>
                 </thead>
                 @foreach ($list as $row)
                <tbody>
                   <tr class="datarow">
                      <td>
                         <input type="checkbox" name="checkId[]" value="{{ $row->id }}">
                      </td>
                      <td>
                         <img src="{{ asset('images/product/'.$row->image) }}" alt="{{ $row->images }}" class="img-fluid">
                      </td>
                      <td>
                        {{ $row->name }}
                      </td>
                      <td>
                        {{ $row->phone }}
                      </td>
                      <td>
                        {{ $row->email }}
                      </td>
                      
                      <td class="text-center">
                        @if ($row->status==1)
                        <a class="btn btn-sm btn-success" href="{{ route('user.status',['user'=>$row->id]) }}">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                        @else
                        <a class="btn btn-sm btn-danger" href="{{ route('user.status',['user'=>$row->id]) }}">
                            <i class="fas fa-toggle-on"></i>
                        </a>
                        @endif
                        <a class="btn btn-sm btn-info" href="{{ route('user.show',['user'=>$row->id]) }}">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a class="btn btn-sm btn-primary" href="{{ route('user.edit',['user'=>$row->id]) }}">
                            <i class=" fas fa-edit"></i>
                        </a>
                        <a class="btn btn-sm btn-danger" href="{{ route('user.delete',['user'=>$row->id]) }}" method="GET">
                            @method('DELETE')
                            @csrf
                            <i class=" fas fa-trash"></i>
                        </a>                                
                      </td>
                   </tr>
                </tbody>
                @endforeach
             </table>
          </div>
       </div>
    </section>
 </div>
 @endsection