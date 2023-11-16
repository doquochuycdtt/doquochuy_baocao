@extends('layouts.admin')
@section('title', 'TẤT CẢ SẢN PHẨM')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
       <div class="container-fluid">
          <div class="row mb-2">
             <div class="col-sm-12">
                <h1 class="d-inline">Tất cả thương hiệu</h1>
             </div>
          </div>
       </div>
    </section>
    <!-- Main content -->
    <section class="content">
       <div class="card">
          <div class="card-header text-right">
               <a href="{{ route('brand.create') }}" class="btn btn-sm btn-success">Thêm thương hiệu</a>
               <a href="{{ route('brand.trash') }}" class="btn btn-sm btn-danger">Thùng rác</a>
          </div>
          <div class="card-body">

                   <table class="table table-bordered">
                      <thead>
                         <tr>
                            <th class="text-center" style="width:30px;">
                               <input type="checkbox">
                            </th>
                            <th class="text-center" style="width:130px;">Hình ảnh</th>
                            <th>Tên thương hiệu</th>
                            <th>Tên slug</th>
                            <th class="text-center">Chức năng</th>
                         </tr>
                      </thead>
                      <tbody>
                        @foreach ($list as $row)
                         <tr class="datarow">
                            <td>
                               <input type="checkbox">
                            </td>
                            <td>
                              <img src="{{ asset('images/brand/'.$row->image) }}" alt="{{ $row->images }}" class="img-fluid">                            </td>
                            <td>
                              {{ $row->name }}
                            </td>
                            <td>{{ $row->slug }}</td>
                            <td class="text-center">                               
                              @if ($row->status==1)
                              <a class="btn btn-sm btn-success" href="{{ route('brand.status',['brand'=>$row->id]) }}">
                                  <i class="fas fa-toggle-on"></i>
                              </a>
                              @else
                              <a class="btn btn-sm btn-danger" href="{{ route('brand.status',['brand'=>$row->id]) }}">
                                  <i class="fas fa-toggle-on"></i>
                              </a>
                              @endif
                              <a class="btn btn-sm btn-info" href="{{ route('brand.show',['brand'=>$row->id]) }}">
                                  <i class="fas fa-eye"></i>
                              </a>
                              <a class="btn btn-sm btn-primary" href="{{ route('brand.edit',['brand'=>$row->id]) }}">
                                  <i class=" fas fa-edit"></i>
                              </a>
                              <a class="btn btn-sm btn-danger" href="{{ route('brand.delete',['brand'=>$row->id]) }}" method="GET">
                                  @method('DELETE')
                                  @csrf
                                  <i class=" fas fa-trash"></i>
                              </a> 
                           </td>
                         </tr>
                         @endforeach
                      </tbody>
                   </table>

          </div>
       </div>
    </section>
 </div>@endsection