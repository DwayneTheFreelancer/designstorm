@extends('layouts.main')

@section('title')
    Design Storm - Inspiration for Developers
@endsection

@section('content')
  <div id="site-section">
    <div class="container">
      <div id="results">
        <div>
          <form action="/results" method="POST">
            @csrf
            <input class="search" type="text" value="{{ $keyword }}" placeholder="Search" name="search">
          </form>
          <div class="boxes">
            <div class="row">
              @if (count($filterData) >= 1)
                @foreach ($filterData as $inspiration)
                  <div class="col-md-3">
                    <div style="margin: 50px 0;" class="box">
                      <div style="position: relative; background: url('{{ $inspiration->covers->{'202'} }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                        @php 
                        $codedUrl = urlencode($inspiration->covers->{'202'})
                        @endphp
                        <a href="/projects/inspiration/{{ $inspiration->id }}/add/?image_url={{ $codedUrl }}"><div class="add-btn "><i class="fa fa-check" aria-hidden="true"></i></div></a>
                      </div>
                    </div>
                  </div>
                @endforeach
              @else
                <h1>Sorry No Results</h1>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection