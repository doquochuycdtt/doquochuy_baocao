@extends('layouts.admin')
@section('title', 'TẤT CẢ DANH MỤC')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>TẤT CẢ DANH MỤC</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="{{ route('dashboard.index')  }}">Bảng điều khiển</a></li>
                  <li class="breadcrumb-item active">TẤT CẢ DANH MỤC</li>
              </ol>
          </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
<section class="content">
    <div class="card">
       <div class="card-header">
        <div class="row">
            <div class="col-md-6">
              <button class="btn btn-sm btn-danger" type="submit" name="DELETE_ALL">
                <i class="fas fa-trash"></i> Xóa đã chọn
            </button>
            </div>
            <div class="col-md-6 text-right">
              <div class="text-right">
                    <a class="btn btn-sm btn-success" href="{{ route('category.create') }}">
                        <i class="fas fa-plus"></i> Thêm
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ route('category.trash') }}">
                      <i class="fas fa-trash"></i> Thùng rác
                  </a>
              </div>
            </div>
            </div>
        </div>
       </div>
       <div class="card-body">
            <table class="table table-bordered">
               <thead>
                  <tr>
                     <th class="text-center" style="width:30px;">
                        <input type="checkbox">
                     </th>
                     <th class="text-center" style="width:130px;">Hình ảnh</th>
                     <th>Tên danh mục</th>
                     <th>Tên thường</th>
                     <th>Chức năng</th>
                     <th>ID</th>
                  </tr>
               </thead>
               <tbody>
                @foreach ($list as $row)
                <tr class="datarow">
                   <td>
                      <input type="checkbox">
                   </td>
                   <td>
                     <img src="{{ asset('images/category/'.$row->image) }}" alt="{{ $row->images }}" class="img-fluid">                            </td>
                   <td>{{ $row->name }}</td>
                   <td>{{ $row->slug }}</td>
                   <td class="text-center">                               
                    @if ($row->status==1)
                    <a class="btn btn-sm btn-success" href="{{ route('category.status',['category'=>$row->id]) }}">
                        <i class="fas fa-toggle-on"></i>
                    </a>
                    @else
                    <a class="btn btn-sm btn-danger" href="{{ route('category.status',['category'=>$row->id]) }}">
                        <i class="fas fa-toggle-on"></i>
                    </a>
                    @endif
                    <a class="btn btn-sm btn-info" href="{{ route('category.show',['category'=>$row->id]) }}">
                        <i class="fas fa-eye"></i>
                    </a>
                    <a class="btn btn-sm btn-primary" href="{{ route('category.edit',['category'=>$row->id]) }}">
                        <i class=" fas fa-edit"></i>
                    </a>
                    <a class="btn btn-sm btn-danger" href="{{ route('category.delete',['category'=>$row->id]) }}" method="GET">
                        @method('DELETE')
                        @csrf
                        <i class=" fas fa-trash"></i>
                    </a> 
                  </td>
                  <td>{{ $row->id }}</td>
                </tr>
                @endforeach
               </tbody>
            </table>
         </div>
          </div>
       </div>
    </div>
 </section>
</div>
 @endsection