@extends('layouts.app')

@section('contents')
    <div class="container">
        <div class="row">
            <div class="col-10 offset-1">
                <div class="card">
                    <div class="card-header">
                        My Camps
                    </div>

                    <div class="card-body">
                        @include('components.alert')
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>User</th>
                                    <th>Camp</th>
                                    <th>Price</th>
                                    <th>Register Data</th>
                                    <th>Paid Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($checkouts as $checkout)
                                    <tr>
                                        <td>{{ $checkout->User->name }}</td>
                                        <td>{{ $checkout->Camp->title }}</td>
                                        <td>${{ $checkout->Camp->price }}</td>
                                        <td>{{ $checkout->created_at->format('M d Y') }}</td>
                                        <td>
                                            @if ($checkout->payment_status == 'paid')
                                                <span class="badge bg-success">Paid</span>
                                            @elseif($checkout->payment_status == 'failed')
                                                <span class="badge bg-warning">Failed</span>
                                            @endif
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td>No Camp Registered</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection