@extends('main')

@section('content')

    <form action="{{route('posts.update', $post)}}" method="post">
        
        <!-- Cross-site request forgery -->
        {{ csrf_field() }}

        <!-- needed to use PUT method -->
        <input name="_method" type="hidden" value="PUT">

        <div class="row"> 
            <div class="input-field col s12">
                <input id="title" name="title" type="text" value="{{$post->title}}"/>
                <label for="title">Title</label>
            </div>
        </div>

        <div class="row"> 
            <div class="input-field col s12">
                <textarea id="content" name="content" class="materialize-textarea">{{$post->content}}</textarea>
                <label for="content">Content</label>
            </div>
        </div>

        <button type="submit" class="waves-effect waves-light btn deep-purple lighten-1">
          Update
        </button>

    </form>

@endsection