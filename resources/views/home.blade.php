@extends('main')
@section('title', 'Home')
@section('content')
<div id="form_messages">
<form method="post" action="/home/mulai" enctype="multipart/form-data">
@csrf
  <div class="section section-lg  pb-4 pt-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-2 pb-3 text-primary" style="opacity: 80%">Deteksi Plagiarisme</h2>
          </div>
        </div>
        <div class="form-group p-3 col-lg-12 col-lg badge badge-secondary ">
          <div class="alert alert-danger" role="alert" id="alert1">
            Anda telah mencapat 1000 kata!
          </div>
            <div class="pb-2">
              <input type="text" id="in_nama" name="in_nama" class="form-control form-control-alternative" placeholder="Masukkan Nama" style="width:100%">
            </div>
            <div class="pb-2">
              <input type="text" id="in_judul" name="in_judul" class="form-control form-control-alternative" placeholder="Masukkan Judul" style="width:100%">
            </div>
              <textarea 
              type="text"
              name="text_area"
              id="text_area" 
              class="form-control form-control-alternative" 
              style="min-height: 300px; width:100%;" 
              placeholder="Tulis teks anda disini ...."><?php
              $text = Session::get('text');
            if(isset($text)) {
            echo $text;
        } else {
        }
    ?></textarea>
              <span class="pull-left pl-2 pt-2" ><button class="btn btn-outline-secondary btn-sm opacity-5 sticky" type="button"><i class="fas fa-trash" id="i_reset" onClick="clear_area()"></i></button></span>
              <span class="pull-right label label-default sticky-bottom" id="count_message"></span>
            </div>
      </div>
    </div>
  <div class="container">
    <div class="d-flex flex-row-reverse">
      <button class="btn btn-success mr-3" id="mulai" name="mulai" type="submit" id="btn_load">Mulai</button>
    </div>
</form>
  <form action="/home/upload_file" method="post" enctype="multipart/form-data">
  <div class="form-group mb-3 ml-3 d-flex d-flex-row">
    <label for="file_browse">
      </label>
      <input class="form-control form-control-sm" id="file_browse" type="file" name="file_browse">
      <button type="submit" class="btn btn-primary btn-sm ml-3" style="margin-top: -30px;" name="unggah" id="sumbit_ref">Unggah</button>
      {{ csrf_field() }}
  </div>
</form>
</div>
@endsection