@extends('main')

@section('content')

    <form action="{{route('posts.store')}}" method="post">
        
        <!-- Cross-site request forgery -->
        {{ csrf_field() }}

        <div class="row"> 
            <div class="input-field col s12">
                <input id="title" name="title" type="text" />
                <label for="title">Title</label>
            </div>
        </div>

        <div class="row"> 
            <div class="input-field col s12">
                <textarea id="content" name="content" class="materialize-textarea"></textarea>
                <label for="content">Content</label>
            </div>
        </div>

        <button type="submit" class="waves-effect waves-light btn deep-purple lighten-1">
          Create
        </button>

    </form>

@endsection