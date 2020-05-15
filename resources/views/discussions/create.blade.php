@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Create Discussions</div>
        <div class="card-body">

            <form action="{{route('dus.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content">
                    <trix-editor input="content"></trix-editor>
                </div>
                <div class="form-group">
                    <select name="channel" id="channel" class="form-control">
                        @foreach ($channels as $channel)
                            <option value="{{$channel->id}}">{{$channel->name}}</option>
                             {{-- //value merupakan id darti si channel untuk pembeda --}}
                        @endforeach
                    </select>
                </div>
                {{-- <input type="submit" value="Create Discussions" class="btn btn-success float-right"> --}}
                <button class="btn btn-success float-right">Create Discussions</button>
            </form>

        </div>

    </div>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.css">
@endsection

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.1/trix.js"></script>
@endsection

