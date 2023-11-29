<html>

    <head>

        <title>pokedex</title>

        <style>

            #pesquisa {

                background: #c92626;
                font-family: Verdana, Geneva, Tahoma, sans-serif;
                padding: 20px;
                text-align: center;

            }

            .pokemon{

                width: 20%;
                border: solid 2px #555;
                padding: 15px;
                margin: 10px 10px 10px 10px;
                /* */
                float: left;

            }

            .pokemon img {

                max-width: 100%;

            }

        </style>


    </head>

<body>

    <div id="pesquisa" >
        <form>
            <input type="text" placeholder="Digite um Pokémon">
            <input type="submit" value="buscar">
        </form>
    </div>

    <div id="pokemons">

    <?php for($i = 0; $i < 20; $i++): ?>

        <div class="pokemon">

            <img src="https://assets.pokemon.com/assets/cms2/img/pokedex/full/015.png" alt=" Beedrill" width="200px">
            #src é o link do serch no google e alt é o nome da imagemque vai aparacer

            <h1>Jigglypuff</h1>
            <p>peso: 29.5</p>
            <p>altura: 1.0</p>

        </div>
    <?php endfor; ?>

    </div>



</body>

</html>
