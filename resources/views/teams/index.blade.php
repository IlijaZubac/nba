    
    
    <div>
        @if ($teams)
        <h1>Teams</h1>
            <ul>
            @foreach ($teams as $team)
                <li>
                    <a href="/teams/{{ $team->id }}"><h4>{{ $team->name}}</h4></a>
                     
                </li>
            @endforeach
            </ul>
        @endif
    </div>
