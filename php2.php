<?php

//TRACCIA 1
// $users = [
//     ["name" => "Marco",
//     "surname" => "DeCrescenzo",
//     "gender" => "Male"
//     ],
//     ["name" => "Mattia",
//     "surname" => "Iacona",
//     "gender" => "Male"
//     ],
//     ["name" => "Maria",
//     "surname" => "Felletti",
//     "gender" => "Female"
//     ],
//     ["name" => "Federica",
//     "surname" => "DePaoli",
//     "gender" => "Female"
//     ],
//     ["name" => "Andrea",
//     "surname" => "Vicini",
//     "gender" => "NB"
//     ],

// ];


// foreach($users as $user){
//     if ($user["gender"] === "Male"){
//         echo "Buongiorno Sig. " . $user["name"] . " " . $user["surname"]; 
//     }else if($user["gender"] === "Female"){
//         echo "Buongiorno Sig.ra " . $user["name"] . " " . $user["surname"];
//     }else {
//         echo "Buongiorno " . $user["name"] . " " . $user["surname"];
//     }
// };


//TRACCIA 2
// $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
// $contatore = 0;
// $totale = 0;


// foreach($numbers as $number){
//     if ($number % 2 === 0){
//         $contatore ++;
//         $totale += $number;
//     }
// };

// echo "La media dei numeri pari è: " . $totale/$contatore;


//TRACCIA 3

// for ($i=1; $i <= 100 ; $i++) { 
//     switch ($i) {
//         case $i % 3 == 0 && $i % 5 == 0://switchata questa parte dal fondo all'inizio dopo la lezione
//             echo "HACKADEMY\n";         //motivo: per via della sequenza, il programma legge prima la situazione più complessa e quindi     stampa anche hackademy
//         case $i % 3 == 0:               
//             echo "JAVASCRIPT\n";
//             break;
//         case $i % 5 == 0:
//             echo "PHP\n";
//             break;
        


//         default:
//             echo "$i\n";
//             break;
//     }
// };
