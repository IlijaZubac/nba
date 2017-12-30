
<div>
    
<h1> {{ $team->name }}</h1>
    @foreach($team->players as $player)
         <li> 
            <a href="/players/{{$player->id}}"> {{ $player->first_name }} {{ $player->last_name }}</a>
         </li>
     @endforeach
    
 </div>