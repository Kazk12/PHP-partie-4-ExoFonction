<?php 

// Exo 1

function True(){
    return true;
}

// Exo 2

function Text($nom = "Test"){
    return $nom;
}


// Exo 3

function DeuxMots($chaineUn = "Moi Moche Et", $chaineDeux = " Mechant"){
    
    $conca = $chaineUn . $chaineDeux;
    return $conca;
}


// Exo 4


function Comparaison($NumberOne = 10, $NumberTwo = 5){
    if($NumberOne > $NumberTwo){
        return "Le " . $NumberOne . " est plus grand que " . $NumberTwo;
    }
    if($NumberOne < $NumberTwo){
        return "Le " . $NumberTwo . " est plus grand que " . $NumberOne;
    }
    if($NumberOne = $NumberTwo){
        return "Le " . $NumberOne . " est identique " . $NumberTwo;
    }
}

// Exo 5

function Fusion($Number = 4, $chaine = " Est le goat"){
    return $Number . $chaine;
}


// Exo 6

function TaVie($nom = "Mazino", $prenom = "Urek", $age = 200){
    return "Bonjour " . $nom . " " . $prenom . " tu as " . $age . " ans.";
}


// Exo 7



function GenreAge($AgeType = 19, $Genre = "Homme"){
$result = "";
$Genre = strtoupper($Genre);

    if ($Genre == "Homme") {
    $result .= "Vous êtes un homme";
} else {
    $result .= "Vous êtes une femme";
}
if ($AgeType > 18) {
    $result .= " et vous êtes majeur";
} else {
    $result .= " et vous êtes mineur";
}

return $result;
}


// Exo 8

function additioner($NOne = 5, $NTwo = 10, $NThree = 15){
    return $NOne + $NTwo + $NThree;
}
 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="Exo1">
        <h2>
            Exo 1
        </h2>
        <p>
            <?php 
            echo True();
            
            ?>
        </p>
    </div>
    <div class="Exo2">
        <h2>
            Exo 2
        </h2>
        <p>
            <?php 
            echo Text("Nad");
            
            ?>
        </p>
    </div>
    <div class="Exo3">
        <h2>
            Exo 3
        </h2>
        <p>
            <?php 
            echo DeuxMots();
            
            ?>
        </p>
    </div>
    <div class="Exo4">
        <h2>
            Exo 4
        </h2>
        <p>
            <?php 
            echo Comparaison(4,6);
            
            
            ?>
        </p>
    </div>

    <div class="Exo5">
        <h2>
            Exo 5
        </h2>
        <p>
            <?php 
            echo fusion();

            
            ?>
        </p>
    </div>
    <div class="Exo6">
        <h2>
            Exo 6
        </h2>
        <p>
            <?php 
            echo TaVie();
            
            ?>
        </p>
    </div>
    <div class="Exo7">
        <h2>
            Exo 7
        </h2>
        <p>
            <?php 
            echo GenreAge(16, "Femme");
            
            ?>
        </p>
    </div>

    <div class="Exo8">
        <h2>
            Exo 8
        </h2>
        <p>
            <?php 
            echo additioner(1,100,1);
            
            ?>
        </p>
    </div>
    
</body>
</html>