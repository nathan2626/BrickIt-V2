<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pacman</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<div class="playerChoice">
    <div class="contentPlayerChoice">
        <h1>Choisis ton héro préféré !</h1>
    </div>
    <div class="charactersChoice">
        <div>
            <a id="boy"><img src="assets/images/game/pac-man.png"></a>
            <a id="hulk"><img src="assets/images/game/hulk.png"></a>
            <a id="harry"><img src="assets/images/game/harry.png"class="lastImg"></a>
        </div>
        <div>
            <a id="mickey"><img src="assets/images/game/mickey.png"></a>
            <a id="america"><img src="assets/images/game/america.png"></a>
            <a id="wolv"><img src="assets/images/game/wolverine.png" class="lastImg"></a>
        </div>
    </div>
</div>
<div class="containerGame">
    <div class="Game_Column">
        <div>
            <input type="button" value="Lancer le jeu !" class="btnGame buttonGame">
        </div>
        <div class="map">
            <img src="assets/images/game/pacman.gif" alt="Pacman">
            <img id ="redG" src="assets/images/game/red-ghost.png" alt="red-ghost">
            <img id ="blueG" src="assets/images/game/blue-ghost.png" alt="blue-ghost">
            <img id ="pinkG" src="assets/images/game/pink-ghost.png" alt="pink-ghost">
            <img src="assets/images/game/background.svg" alt="Labyrinthe">
        </div>
    </div>

    <div class="Info_Column">
        <h2>Infos :</h2>
        <h3>Pseudo : <span class="spanGame" id="pseudo"></span></h3>
        <h3>Score : <span class="spanGame" id="score"></span></h3>
        <h3>Lv : <span class="spanGame" id="level"></span></h3>
    </div>

    <div class="Classement_Column">
        <h2>Classement :</h2>
        <ul class="ulGame"></ul>
    </div>

    <div class="GameOver">
        <h1>GAME OVER !!</h1>
        <div class="formGame">
            <form>
                <div class="scoreDiv"><p>Votre score final est de : <span class="spanGame" id="scoreUserDataBase"></span></p></div>
                <div class="centerNameSubmit">
                    <input type="text" size="31%" class="text_input"autofocus required minlength="3" maxlength="10">
                    <input type="submit" class="submit_input" value="Enregistrer">
                </div>
            </form>
        </div>
        <div class="messageGame"></div>
        <div class="btnReGame">
            <a href="index.php">Rejouer !</a>
        </div>
    </div>
</div>
<script src="assets/js/game.js"></script>
</body>
</html>