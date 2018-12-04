@extends('layouts.account')

@section('title')
    Account - Dashboard
@endsection

@section('content')
  <div>
    <div class="row">
        <div class="col-md-10">
            <h1>Edit Project</h1>
            <h6>This is where all your projects are located</h6>
        </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="box">
          <div class="row">
              <div class="col-md-10">
                <form action="/account/projects/{{$project->id}}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label for="title">Title</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" name="title" value="{{$project->title}}" >
                        </div>
                    </div>
                    <div class="image-section">
                        <div class="row">
                            @foreach ($project->inspirations as $inspiration)
                                <div class="col-md-3">
                                    <div style="margin: 50px 0;" class="box">
                                        <div style="position: relative; background: url('{{ $inspiration->image_url }}') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover; height: 200px;">
                                        </div>
                                        <a href="/projects/inspiration/{{$inspiration->image_info}}/delete">Delete</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <button type="submit">Save</button>
                </form>
              </div>
              <div class="col-md-2">
                <a class="delete-btn" href="/account/projects/{{$project->id}}/delete" onclick="confirm()">Delete</a>
              </div>
            </div>
        </div>
      </div>
    </div>
  </div>
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.bundle.js"></script>
  <script>
    
  </script> -->
@endsection