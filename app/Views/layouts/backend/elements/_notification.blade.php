@if(session()->has('notification'))
    <div class="notification">
        <div class="alert alert-success">
            {{ session()->get('notification') }}
        </div>
    </div>
@endif