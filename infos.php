<?php

// Pokemon ID 
function pokemonId($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokemonId = $jsonResult->id;
    return $pokemonId;
}

//Pokemon Color
function pokemonColor($pokemonName)
{
    global $jsonResult;

    createSpeciesUrl($pokemonName);
        $pokemonColor = $jsonResult->color->{'name'};
    return $pokemonColor;
}



//Sprite 
function sprite($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
         $sprite = $jsonResult->sprites->other->home->front_default;
    return $sprite;
  
}

//Sprite shiny
function spriteShiny($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $spriteShiny = $jsonResult->sprites->other->home->front_shiny;
    return $spriteShiny;
}

//Type
function pokemonType($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
    // set_error_handler('error');

    $pokemonType = $jsonResult->types[0];
    if(sizeof($jsonResult->types) >= 2){
    $pokemonType1 = $jsonResult->types[0]->type->name;
    $pokemonType2 = $jsonResult->types[1]->type->name;
    return $pokemonType1.' & '.$pokemonType2;
    }
    else{
        $pokemonType1 = $jsonResult->types[0]->type->name;
        return $pokemonType1;
    }
}

//Height
function pokemonHeight($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokemonHeight = $jsonResult->height;
    return $pokemonHeight;

}

//Weight
function pokemonWeight($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokemonWeight = $jsonResult->weight;
    return $pokemonWeight/10;

}

//HP
function pokemonStat($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokeStat = $jsonResult->stats[0]->base_stat;
    return $pokeStat;
}

//Number attack
function pokemonMoveNumber($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokeMoveNumber = $jsonResult->stats[3]->base_stat;
    return $pokeMoveNumber;
}

//Attack
function pokemonMove($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokeMove = $jsonResult->moves[0]->move->name;
    return $pokeMove;
}


//Talent
function pokemonAbility($pokemonName)
{
    global $jsonResult;

    createPokemonUrl($pokemonName);
        $pokeAbility = $jsonResult->abilities[0]->ability->name;
    return $pokeAbility;
}

//Description
function pokemonDescription($pokemonName)
{
    global $jsonResult;

    createSpeciesUrl($pokemonName);
        if($pokemonDesc = $jsonResult->flavor_text_entries[11]->language->name === 'en'){
            $pokemonDesc = $jsonResult->flavor_text_entries[11]->flavor_text;
            return $pokemonDesc;
    
        }
        else{
            $pokemonDesc = $jsonResult->flavor_text_entries[2]->flavor_text;
            return $pokemonDesc;
        } 
}

//Location
function pokemonLocationArea($pokemonName)
{
    global $jsonResult;

    createSpeciesUrl($pokemonName);
        $pokemonLocationArea = $jsonResult->habitat->name;
    return $pokemonLocationArea;
}

?>