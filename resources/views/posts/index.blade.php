@extends('main')

@section('content')
    <ul>
    @foreach($posts as $post)
    <li></li>
      <h5>{{$post->title}}</h5>
      <p></p>
      {{$post->content}}
      </p>

        @if($post->user_id == auth()->user()->id)

        <a href="{{route('posts.edit', $post)}}" class="waves-effect waves-light btn deep-purple lighten-1">
            Edit
        </a>
        <form style="display: inline" action="{{route('posts.destroy', $post)}}" method="POST">
        
            {{ csrf_field() }}
            <!-- needed to use DELETE method -->
            <input name="_method" type="hidden" value="DELETE">

            <button type="submit" style="margin-left: 8px" class="btn-floating btn waves-effect waves-light red">
            <i class="material-icons left">delete</i>
            <!-- Delete -->
            </button>
        </form>

        @endif
      
    </li>
    @endforeach
    </ul>

    {{ $posts->links() }}
@endsection