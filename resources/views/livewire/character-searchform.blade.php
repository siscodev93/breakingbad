<div class='searchwrapper'>
    <div>
        <input id="search-field" type="text" wire:model='query' placeholder="Search For Character...">
    </div>

    <div class="character-list">
        @foreach ($characters as $character)
        <div class='character'>
            <h3 class='name'>{{$character->name}}</h3>
            <img src='{{$character->img}}' width='200' height='200' />
            
            <div>
                <p>Occupations:</p>
                @foreach ($character->occupation as $occupation )
                    <p>{{$occupation}}</p>
                @endforeach
            </div>
       
             <a href="character/{{$character->char_id}}">Edit Character</a>
        </div>
        @endforeach
</div>
