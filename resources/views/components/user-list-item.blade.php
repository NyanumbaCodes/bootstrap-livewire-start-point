@props(['user', 'selectedUserId'])


<li wire:click='selectUser({{ $user->id }})'
    class="list-group-item {{ $user->id == $selectedUserId ? 'active' : '' }} d-flex justify-content-between">
    <img src="{{ $user->profile_photo_url }}" width="50px" class="img-fluid rounded-circle" alt="" />

    <div class="me-auto ms-2 text-start">
        <h5>{{ $user->name }}</h5>
        <small class="">{{ $user->email }} <br> {{ $user->phone ?? '' }}</small>
    </div>
</li>
