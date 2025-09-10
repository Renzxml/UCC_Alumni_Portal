@extends('layouts.user_app')

@section('title', 'Network')

@section('content')
<div>
    <h3>Network Page</h3>
    <div class="network-container">
        <p>Welcome to the network page!</p>
        <div class="network-map">
        </div>
        <div class="network-details">
            <input type="text" placeholder="Search network..." />
            <ul>
                <li>Caloocan</li>
                <li>Manila</li>
                <li>Quezon City</li>
                <li>Pasig</li>
            </ul>
        </div>
    </div>
</div>
@endsection