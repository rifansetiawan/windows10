@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="d-flex justify-content-between">
                <div>
                    <strong class="ml-2">
                        User (Penyewa Kamar)
                    </strong>
                </div>

            </div>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Payment Status</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($users)
                        @foreach ($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->phone_number}}</td>
                                <td>{{$user->is_paid == 1 ? 'Paid' : 'Not Paid'}}</td>
                            </tr>
                        @endforeach

                    @endif
                </tbody>
              </table>
        </div>
    </div>
@endsection
