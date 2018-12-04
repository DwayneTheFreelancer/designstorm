@extends('layouts.account')

@section('title')
    Account - Dashboard
@endsection

@section('content')
  <div>
    <div class="row">
        <div class="col-md-10">
            <h1>{{ $project->title }}</h1>
            <h6>This is where all your projects are located - <strong style="color: red">Author: {{$project->user->name}}</strong></h6>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="row">
              <div class="col-md-10">

                    <div class="image-section">
                        <div class="row">
                            @foreach ($project->inspirations as $inspiration)
                                <div class="col-md-3">
                                    <div style="margin: 50px 0;" class="box">
                                        <div style="position: relative; background: url('{{$inspiration->image_url}}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

              </div>
              <div class="col-md-2">
                <a class="edit-btn" href="/account/projects/{{$project->id}}/edit">Edit</a>
                <a class="delete-btn" href="/account/projects/{{$project->id}}/delete" onclick="confirm()">Delete</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
@endsection