@extends('layouts.master2')
@section('datatb2')

       
              {{ Form::open(['method' => 'PATCH','route' => ['datatb.update', $kategoris->id_kategori]]) }}
              <form role="form">
              <div class="box-body">
                <div class="form-group">
                  <label for="nama_kategori">Nama Kategori</label>
                  <input name="nama_kategori" type="text" class="form-control" id="nama_kategori" placeholder="Masukkan Nama Kategori" value="{{ $kategoris->nama_kategori }}">
                </div>
                <div class="form-group">
                  <label>Deskripsi Kategori</label>
                  <textarea name="deskripsi_kategori" id="deskripsi_kategori" class="form-control" rows="3" placeholder="Enter ..."  >{{ $kategoris->deskripsi_kategori }}</textarea>
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
              
                {{ Form::submit('Edit')}}
                {{ Form::close() }}
             


        

 @endsection
 