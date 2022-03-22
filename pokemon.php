<?php
    include('./include/config.php');
    include('url.php');
    include('infos.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Nicss Pokédex</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="style.css" rel="stylesheet">
    <link rel="icon" type="image/png" href="../favicon/pokeball.png"/>
</head>
<body>
    <div class="pokemon-list">
    <?php foreach($pokemon as $pokemons): ?>
            <div class="item-list" style="background:<?php switch (pokemonColor($pokemons->{'name'}))
            {
                case 'black':
                    echo '#6c757d';
                    break;
                case 'blue':
                    echo '#ade8f4';
                    break;
                case 'brown':
                    echo '#b08968';
                    break;
                case 'gray':
                    echo '#adb5bd';
                    break;
                case 'green':
                    echo '#80b918';
                    break;
                case 'pink':
                    echo '#ffafcc';
                    break;
                case 'purple':
                    echo '#9d4edd';
                    break;
                case 'red':
                    echo '#e5383b';
                    break;
                case 'white':
                    echo '#ffddd2';
                    break;
                case 'yellow':
                    echo '#ffc300';
                    break;
                }?>">               
                <p class ="name"><strong><?= ucfirst($pokemons->{'name'})?></strong></p>
                <p class="id"><strong><?= str_pad(pokemonId($pokemons->{'name'}), 4, "#00", STR_PAD_LEFT)?></strong></p>            
                <img class="type" src="/img/type-icon/<?= pokemonType($pokemons->{'name'})?>.png">
                <div class="sprite-container">
                    <img class="sprite" src="<?= sprite($pokemons->{'name'})?>">
                    <img class="sprite-shiny" src="<?= spriteShiny($pokemons->{'name'})?>">
                </div>
                <p class="ability">: <?= ucfirst(pokemonAbility($pokemons->name))?></p>
                <img class="star" src="/img/star.png">
                <p class="height-weight"><?= pokemonHeight($pokemons->name)?>0cm / <?= pokemonWeight($pokemons->name)?>kg</p>
                <p class="hp"><strong><?= pokemonStat($pokemons->name)?>HP</strong></p>
                <hr style="  border: 0;border-bottom: 1px solid #001219;clear: both;display: block;height: 0;margin: 0 auto 420px auto;padding-top: 420px;max-width: 220px;width: 100%;">
                <p class="description"><?= pokemonDescription($pokemons->name)?></p>
                <p class="move">: <?=pokemonMove($pokemons->name)?></p>
                <p class="move-number"><?= ucfirst(pokemonMoveNumber($pokemons->name))?></p>
                <img class="attack" src="/img/attack.png">
                <p class="location">: <?= ucfirst(pokemonLocationArea($pokemons->name))?></p>
                <img class="area" src="/img/location.png">
            </div>
    <?php endforeach; ?>
    </div>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js'></script>
    <script src="script.js"></script>
</body>
</html>