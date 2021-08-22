@extends('main')
@section('title', 'Home')
@section('content')
<div id="form_messages">
<form method="post" action="" enctype="multipart/form-data">
  <div class="section section-lg  pb-4 pt-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-2 pb-3 text-primary" style="opacity: 80%">Deteksi Plagiarisme</h2>
          </div>
        </div>
        <div class="form-group col-lg-12 col-lg ">
          <div class="alert alert-danger" role="alert" id="alert1">
            Anda telah mencapat 1000 kata!
          </div>
            <label for="text_area"></label>
              <textarea 
              type="text"
              name="text_area"
              id="text_area" 
              class="form-control form-control-alternative" 
              style="min-height: 300px; width:100%;" 
              placeholder="Tulis teks anda disini ...." 
              maxlength="1000"><?php
              $text = Session::get('text');
            if(isset($text)) {
            echo $text;
        } else {
        }
    ?></textarea>
              <span class="pull-left pl-2 pt-2" ><button class="btn btn-outline-secondary btn-sm opacity-5 sticky" type="button"><i class="fas fa-trash" id="i_reset" onClick="clear_area()"></i></button></span>
        </div>
              <span class="pull-right label label-default sticky-bottom" id="count_message"></span>
      </div>
  </div>
</form>
<div class="container">
  <div class="d-flex flex-row-reverse">
    <button class="btn btn-success mr-3" type="submit" id="btn_load">Mulai</button>
  </div>
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