@if (session()->get('success'))
    <div class="alert alert-success"><strong>Success:</strong>{{ session()->get('success') }}</div>
    
@endif
{{-- @if (session()->get('success'))
            <div class="alert alert-success"><strong>Success:</strong>{{ session()->get('success') }}</div>
            @elseif (session()->get('warning'))
            <div class="alert alert-warning"><strong>Warning:</strong>{{ session()->get('warning') }}</div>
            @elseif (session()->get('error'))
            <div class="alert alert-danger"><strong>Error:</strong>{{ session()->get('error') }}</div>
@endif --}}