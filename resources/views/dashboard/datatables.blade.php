@extends('layouts.master2')
@section('datatb')



    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Data Tables
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Data tables</li>
      </ol>
      <!-- search form -->
        <form action="{{ url('query') }}" method="get" >
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                  <i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Hover Data Table</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Dibuat pada</th>
                <th>Diperbarui pada</th>
                <th></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($kategoris as $kategoris )
                <tr>
                <td>{{$kategoris->id_kategori}}</td> 
                  <td>
                    {{$kategoris->nama_kategori}}
                     </td>
                     <td>{{$kategoris->deskripsi_kategori}}</td>
                    <td>{{$kategoris->created_at}}</td>
                    <td>{{$kategoris->updated_at}}</td>
                </tr>
                @endforeach
                </tbody>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

         
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
 @endsection
  

