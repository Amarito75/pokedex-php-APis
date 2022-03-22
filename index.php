<?php
    include('./include/config.php');
    include('url.php');
    include('infos.php');
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Niccs Pokédex</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style.css">
  <link rel="icon" type="image/png" href="../favicon/pokeball.png"/>
</head>
<body>
<div id="pokeball-1" class="pokeball">
  <button id="toggle-button"></button>
</div>
<div class="icon-menu">
    <a href="pokemon.php" class="pokemon-menu button">
        <img src="/img/pikachu.png">
    </a>
    <a href="videogames.php" class="video-games-menu button">
        <img src="/img/gameboy.png">
    </a>
    <a href ="items.php"class="map-menu button">
      <img src="/img/map.png">
    </a>   
</div>
<svg id="summon-1" width="600px" height="500px" class="summon hidden">
  <path 
     class="path"
     d="M100 250 L280 150 L460 215"
     fill="none"
     stroke="black"
     stroke-width="15px"
     stroke-dasharray="100%"
     stroke-dashoffset="100%" />
</svg>
<svg width="500px" height="500px" class="hidden">
  <defs>
    <filter id="spawn-line">
      <feTurbulence 
         id="line-turbulence"
         in="SourceGraphic"
         type="fractalNoise"
         baseFrequency="0.013"
         numOctaves="1"
         result="TURBULENCE_1" />
      <feDisplacementMap
         id="line-displacement"
         in="SourceGraphic"
         in2="TURBULENCE_1"
         scale="200"
         xChannelSelector="R"
         yChannelSelector="G"
         result="DISPLACEMENT_1" />
      <feFlood
         in="DISPLACEMENT_1"
         flood-color="#fffdc4"
         flood-opacity="1"
         result="FLOOD_1" />
      <feComposite
         in="FLOOD_1"
         in2="DISPLACEMENT_1"
         operator="in"
         result="COMPOSITE_1" />
    </filter>
    <filter id="spawn-pokemon">
      <feTurbulence 
         id="pokemon-turbulence"
         in="SourceGraphic"
         type="fractalNoise"
         baseFrequency="0.015"
         numOctaves="1"
         result="TURBULENCE_1" />
      <feDisplacementMap
         id="pokemon-displacement"
         in="SourceGraphic"
         in2="TURBULENCE_1"
         scale="100"
         xChannelSelector="R"
         yChannelSelector="G"
         result="DISPLACEMENT_1" />
      <feFlood
         in="DISPLACEMENT_1"
         flood-color="#fffdc4"
         flood-opacity="1"
         result="FLOOD_1" />
      <feComposite
         in="FLOOD_1"
         in2="DISPLACEMENT_1"
         operator="in"
         result="COMPOSITE_1" />
    </filter>
    <filter id="retrieve-line">
      <feTurbulence 
         in="SourceGraphic"
         type="fractalNoise"
         baseFrequency="0.015"
         numOctaves="1"
         result="TURBULENCE_1" />
      <feDisplacementMap
         in="SourceGraphic"
         in2="TURBULENCE_1"
         scale="200"
         xChannelSelector="R"
         yChannelSelector="G"
         result="DISPLACEMENT_1" />
      <feFlood
         in="DISPLACEMENT_1"
         flood-color="#fec9c9"
         flood-opacity="1"
         result="FLOOD_1" />
      <feComposite
         in="FLOOD_1"
         in2="DISPLACEMENT_1"
         operator="in"
         result="COMPOSITE_1" />
    </filter>
    <filter id="retrieve-pokemon">
      <feTurbulence 
         id="retrieve-turbulence"
         in="SourceGraphic"
         type="fractalNoise"
         baseFrequency="0.015"
         numOctaves="1"
         result="TURBULENCE_1" />
      <feDisplacementMap
         id="retrieve-displacement"
         in="SourceGraphic"
         in2="TURBULENCE_1"
         scale="100"
         xChannelSelector="R"
         yChannelSelector="G"
         result="DISPLACEMENT_1" />
      <feFlood
         in="DISPLACEMENT_1"
         flood-color="#fec9c9"
         flood-opacity="1"
         result="FLOOD_1" />
      <feComposite
         in="FLOOD_1"
         in2="DISPLACEMENT_1"
         operator="in"
         result="COMPOSITE_1" />
    </filter>
  </defs>
</svg>
<script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
<script src="script.js"></script>
</body>
</html>