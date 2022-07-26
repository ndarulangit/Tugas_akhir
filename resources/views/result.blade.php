@extends('main')
@section('title', 'Hasil Pengecekan')
@section('content')
  <div class="section section-lg  pb-4 pt-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 text-center">
            <h2 class="display-2 pb-3 text-primary" style="opacity: 80%">Deteksi Plagiarisme</h2>
          </div>
          <div class="col-lg-8 text-center">
          <h1 class="display-2 pb-3 text-primary" style="opacity: 80%">Tingkat Plagiarisme : {{$rslt}} %</h1>
          <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: {{$rslt}}%" aria-valuenow="{{$rslt}}" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h5 class="display-4 pb-0 text-primary" style="opacity: 80%">Berikut beberapa data yang berkaitan :</h5>
          </div>
        </div>
        <div id="accordion">
          <div class="card-header" id="headingThree">
                <tr>
                  @foreach ($rslt1 as $item)
                <div class="card" style="height: 5rem">
                <h5 class="pb-0 text-center">
                  <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapse{{$item->id}}" aria-expanded="false" aria-controls="collapseThree">
                    {{$item->title}} <span class="text-warning">(Plagiat :{{$item->result}}%)</span>
                  </button>
                </h5>
              </div>
              <div id="collapse{{$item->id}}" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body text-left">{{$item->txxtt}}</div>
              </div>
              @endforeach
            </tr>
          </div>
        </div>  
      </div>
      </div>
@endsection