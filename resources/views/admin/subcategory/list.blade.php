@extends('admin.layout.index')
@section('content')
<div class="page-header card">
    <div class="row align-items-end">
        <div class="col-lg-8">
            <div class="page-header-title">
                <i class="feather icon-align-left bg-c-blue"></i>
                <div class="d-inline">
                    <h4>SubCategory</h4>
                    <span>List</span>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="page-header-breadcrumb">
                <ul class=" breadcrumb breadcrumb-title">
                    <li class="breadcrumb-item">
                        <a href="index.html"><i class="feather icon-home"></i></a>
                    </li>
                    <li class="breadcrumb-item"><a href="#!">Subcategory</a> </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<div class="main-body">
    <div class="page-wrapper">

        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <a href="admin/subcategory/create" class="text-light"><button class=" btn btn-primary float-right mb-3" >Add</button></a>
                            <div class="dt-responsive table-responsive">
                                <table id="autofill" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr align="center">
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Category</th>
                                            <th>Sort Name</th>
                                            <th>Active</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($subcategory as $value)
                                        <tr align="center">
                                            <td>{!! $value['id'] !!}</td>
                                            <td>{!! $value['name'] !!}</td>
                                            <td>{!! $value['category']['name'] !!}</td>
                                            <td>{!! $value['sort_name'] !!}</td>
                                            <td>
                                                @if ($value['active'] == 1)
                                                <a href="admin/subcategory/block/{!! $value['id'] !!}">
                                                  <img style="width: 40px" src="upload/icon/accept.png" alt="">
                                                </a>
                                                @else
                                                <a href="admin/subcategory/active/{!! $value['id'] !!}">
                                                    <img style="width: 40px" src="upload/icon/noaccept.png" alt="">
                                                </a>
                                                @endif
                                            </td>
                                            <td class="center "><a class="btn btn-danger " href="admin/subcategory/delete/{!! $value['id'] !!}"> Delete</a></td>
                                            <td class="center "><a class="btn btn-warning " href="admin/subcategory/edit/{!! $value['id'] !!}">Edit</a></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                 {{-- {!!$loaitin->links()!!} --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection