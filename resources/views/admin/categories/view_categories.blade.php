@extends('layouts.adminLayout.admin_design')

@section('content')
  <div id="content">
    <div id="content-header">
      <div id="breadcrumb"> <a href="#" title="Go to Home" class="tip-bottom">
        <i class="icon-home"></i> Home</a> <a href="#" class="current">Categories</a>
      <a href="#" class="current">View Categories</a> </div>
      <h1>Categories</h1>
      @if (Session::has('PesanSukses'))
        <div class="alert alert-success alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{!! session('PesanSukses') !!}</strong>
        </div>
      @endif
      @if (Session::has('PesanError'))
        <div class="alert alert-error alert-block">
          <button type="button" class="close" data-dismiss="alert">×</button>
          <strong>{!! session('PesanError') !!}</strong>
        </div>
      @endif
    </div>
    <div class="container-fluid">
      <hr>
      <div class="row-fluid">
        <div class="span12">

          <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
              <h5>Data table</h5>
            </div>
            <div class="widget-content nopadding">
              <table class="table table-bordered data-table">
                <thead>
                  <tr>
                    <th>Category ID</th>
                    <th>Category Name</th>
                    <th>Category URL</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($categories as $category)
                    <tr class="gradeX">
                      <td>{{ $category->id}}</td>
                      <td>{{ $category->name}}</td>
                      <td>{{ $category->url}}</td>
                      <td class="center">
                        <a href="{{ url('/admin/edit-category/'.$category->id)}}" class="btn btn-primary btn-mini"> Edit </a>
                        <a href="{{ url('/admin/delete-category/'.$category->id)}}" class="delCat btn btn-danger btn-mini" > Hapus </a>
                      </td>
                    </tr>
                  @endforeach



                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
