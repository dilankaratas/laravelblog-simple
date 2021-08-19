@extends('back.layouts.master')
@section('title', $page->title.' update page')
@section('content')


<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">@yield('title')
                        </div>
                        <div class="card-body">
                        @if($errors->any())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)

                           <li> {{$error}}</li>
                            @endforeach
                           </div>
                           @endif
                            <form method="post" action="{{route('admin.page.update.post',$page->id)}}" enctype="multipart/form-data">
                            
                            @csrf
                        <div class="form-group">
                         <label> page Title</label>
                         <input type="text" name="title" class="form-control" value="{{$page->title}}" required> </input>
                         </div>
                        


                             <div class="form-group">
                         <label> page İmage</label>
                         <img src="{{asset($page->image)}}" class="img-thumbnail rounded" width="300"/>
                         <input type="file" name="image" class="form-control"> </input>
                         </div>
                         <div class="form-group">
                         <label> page Content</label>
                         <textarea id="editor" name="content" class="form-control"  rows="4"> {!! $page->content!!} </textarea>
                         </div>
                         <div class="form-group">
                       
                         <button type="submit" class="btn btn-primary btn-block">Update page</button>
                     
                         </div>
                       </form>
                        </div>
                        </div>
                    </div>

@endsection

@section('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endsection
@section('js')
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
<script>
$(document).ready(function() {
  $('#editor').summernote(
      {
          height:300
      }
  );
});
</script>

@endsection