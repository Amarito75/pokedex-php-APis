<?php

    // URL
    $generalUrl = 'https://pokeapi.co/api/v2/pokemon/?';
    $generalUrl .= http_build_query([
        'offset' => 0,
        'limit' => 151,
    ]);
    
    // Create URL 
    function apiCall($url)
    {
        global $jsonResult;
        
            //Cache
            $rawMd5 = md5($url);
            $filePath = './cache/'.$rawMd5;
            $cacheUsed = false;

            if(file_exists($filePath))
            {
                $jsonResult = file_get_contents($filePath);
                $cacheUsed = true;
            }
            else
            {
            $curl = curl_init();
            curl_setopt($curl, CURLOPT_URL, $url);
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);

            $jsonResult = curl_exec($curl);
            curl_close($curl);
            file_put_contents($filePath, $jsonResult);
            }
            set_time_limit(0);
            // Decode JSON
            $jsonResult = json_decode($jsonResult);
    };
    
    apiCall($generalUrl);

    //Pokemon
    function createPokemonUrl($pokemonName)
    {
        global $jsonResult;
       
        $pokemonUrl = 'https://pokeapi.co/api/v2/pokemon/';
        $pokemonUrl .= $pokemonName;

        apiCall($pokemonUrl);
    }

    //Pokemon species
    function createSpeciesUrl($pokemonName)
    {
        global $jsonResult;

        $pokeSpeciesUrl = 'https://pokeapi.co/api/v2/pokemon-species/';
        $pokeSpeciesUrl .= $pokemonName;
        
        apiCall($pokeSpeciesUrl);
    }


$pokemon = $jsonResult->results;


    
?>