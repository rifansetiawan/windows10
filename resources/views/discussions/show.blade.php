@extends('layouts.app')

@section('content')


<div class="card">
    <div class="card-header">
        <div class="d-flex justify-content-between">
        <div>
            <img width="40px" height="40px" style="border-radius: 50%" src="{{Gravatar::src($discussion->author->email)}}" alt="">
            <strong class="ml-2">
                {{$discussion->author->name}}
            </strong>
        </div>
    </div>

    </div>


    <div class="card-body">
       {{$discussion->title}}

       <hr>

       {!! $discussion-> content !!}
    </div>
 </div>

@foreach ($discussion->replies()->paginate(3) as $reply)
    <div class="card my-1">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <img width="40px" height="40px" style="border-radius: 50%" src="{{Gravatar::src($reply->owner->email)}}" alt="">
                    <span>
                        Reply from {{$reply->owner->name}}
                    </span>
                </div>
            </div>
        </div>
        <div class="card-body">
            {!!$reply->content!!}
        </div>
    </div>
@endforeach
{{ $discussion->replies()->paginate(3)->links() }}

 <div class="card">
     {{-- <div class="card-header">Add a Reply</div> --}}

     @auth
     <div class="card-body">
        {{-- isinya form  --}}
        <form action="{{route('replies.store', $discussion->id)}}" method="POST">
            @csrf
            <input type="hidden" name="content" id="content">
            <trix-editor input="content"></trix-editor>
            <input type="submit" value="Submit" class="btn btn-success my-2 btn-sm float-right" >
            {{-- <button type="submit" class="btn btn-success my-2 btn-sm float-right"> Submit</button> --}}
        </form>
    </div>
     @else
        <a href="{{route('login')}}" class="btn btn-info">Sign in to Add Reply</a>
     @endauth


 </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection
