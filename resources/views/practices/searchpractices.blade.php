@extends('layouts.app')

@section('content')
<a href="/">
    <h1>Start Your Life</h1>
</a>
<div class="band">
    <h2>Zoek resultaten</h2>
</div> 
    <div class="searches">
        @if(count($practices) > 0)
            @foreach($practices->all() as $practice)
                <div class="search">
                    <h3>{{$practice->practice_title}}</h3>
                    <p>{{substr($practice->practice_body, 0, 150) }}</p>
                    <ul>
                        <li>
                            <a href='{{ url("/view/{$practice->practices_id}")}}'>
                                <span>Zie antwoorden</span>
                            </a>
                        </li>
                    </ul>
                    <cite> Posted on: {{date('M j, Y H:i', strtotime($practice->updated_at))}}</cite>
                </div>
            @endforeach
        @else
            <p>No best practices available</p>
        @endif
    </div>
@endsection
