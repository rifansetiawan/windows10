@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">Notifications</div>

        <div class="card-body">
            <ul class="list-group">
                    @foreach($notifications as $notification)
                        <li class="list-group-item">
                            @if($notification->type === 'App\Notifications\NewReplyAdded')
                                A new reply was added to your discussion Titled : {{$notification->data['discussion']['title']}}
                                <a href="{{ route('dus.show', $notification->data['discussion']['id']) }}" class="btn btn-sm btn-info float-right" style="color: white">View Discussion</a>
                            @endif
                        </li>
                    @endforeach

            </ul>
        </div>
    </div>
@endsection
