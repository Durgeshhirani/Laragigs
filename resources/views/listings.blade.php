<h1>{{ $heading }}</h1>

{{-- @if (count($listings) == 0)
<h1>No listings Found.</h1>
@endif --}}

@unless (count($listings) == 0)
    @foreach ($listings as $listing)
        <a href="/listings/{{ $listing['id'] }}">{{ $listing['title'] }}</a>
        <p>{{ $listing['description'] }}</p>
    @endforeach
@else
    <p>No Listings Found</p>

@endunless
