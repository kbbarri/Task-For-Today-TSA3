@extends('layouts.app')

@section('title', 'Profile - Tasks for Today')

@section('content')

<div class="page-heading">
    <div>
        <p class="eyebrow">USER INFORMATION</p>
        <h1>My Profile</h1>
        <p class="subtitle">
            View account information.
        </p>
    </div>
</div>

@if ($user)
    <div class="profile-card">
        <div class="avatar">
            {{ strtoupper(substr($user->full_name, 0, 1)) }}
        </div>

        <div class="profile-info">
            <h2>{{ $user->full_name }}</h2>
            <p class="subtitle">{{ '@' . $user->username }}</p>

            <div class="profile-details">
                <div>
                    <span>Username</span>
                    <strong>{{ $user->username }}</strong>
                </div>

                <div>
                    <span>Full Name</span>
                    <strong>{{ $user->full_name }}</strong>
                </div>

                <div>
                    <span>Email Address</span>
                    <strong>{{ $user->email }}</strong>
                </div>
            </div>
        </div>
    </div>
@else
    <div class="empty-state">
        <h2>No Profile Found</h2>
        <p>No user information is available.</p>
    </div>
@endif

@endsection