@extends('layouts.master2')
@section('datatb')
<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tabel Kategori</h3>
              
              <div class="box-tools">
              <form action="{{ url('query') }}" method="get" >
                <div class="input-group input-group-sm" style="width: 150px;">
                  <input type="text" name="q" class="form-control pull-right" placeholder="Search">
                  <div class="input-group-btn">
                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </div>
                </div>
                
                </form>
                
              </div>
             
            </div>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default" >Add Data</button>
           
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                <th>ID Kategori</th>
                <th>Nama Kategori</th>
                <th>Deskripsi</th>
                <th>Dibuat pada</th>
                <th>Diperbarui pada</th>
                <th>Action  </th>
                </tr>
                @foreach ($kategoris as $kategoris )
                <tr>
                <td>{{$kategoris->id_kategori}}</td> 
                  <td>
                    {{$kategoris->nama_kategori}}
                     </td>
                     <td>{{$kategoris->deskripsi_kategori}}</td>
                    <td>{{$kategoris->created_at}}</td>
                    <td>{{$kategoris->updated_at}}</td>
                    <td>
                      <div class="table-data-feature">
                        <a href="{{ url('datatb/'.$kategoris->id_kategori.'/edit') }}"><button class="item"  data-toggle="tooltip" data-placement="top" title="Edit">
                        <i class="zmdi zmdi-edit"></i>
                        </button>
                        {{ Form::open(['method' => 'DELETE','route' => ['datatb.destroy', $kategoris->id_kategori]]) }}
                        <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                        <i class="zmdi zmdi-delete"></i>
                        </button>
                        {{ Form::close() }}
                        </div>                                         
                    </td>
                </tr>
                @endforeach
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>


    <div class="modal fade" id="modal-default">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Tambah Kategori</h4>
              </div>
              <div class="modal-body">
              {{ Form::open(['method' => 'POST','route' => ['kategori.store']]) }}
              <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_kategori">ID Kategori</label>
                  <input name="id_kategori" type="text" class="form-control" id="id_kategori" placeholder="Masukkan ID Kategori">
                </div>
                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input name="nama_kategori" type="text" class="form-control" id="nama_kategori" placeholder="Masukkan Nama Kategori">
                </div>
                <div class="form-group">
                  <label>Deskripsi Kategori</label>
                  <textarea name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" rows="3" placeholder="Enter ..."></textarea>
                </div>
              </div>
              <!--
              <div class="form-group">
                <label>Created at:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="created_at">
                </div>
            </for>
            <div class="form-group">
                <label>Update at:</label>
                <div class="input-group date">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control pull-right" id="updated_at">
                </div>
            </form>
              -->
              </div>
              <div class="modal-footer">
                <button  type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button>
                {{ Form::submit('Tambah') }}
                {{ Form::close() }}
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->


       
 @endsection
 