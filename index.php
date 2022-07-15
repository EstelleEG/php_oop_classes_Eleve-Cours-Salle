<?php 
require ('./Eleve.php');
require ('./Cours.php');
require ('./Salle.php');
require ('./Db.php');

//////////////////////////////////////////////////////////////////////////////////
// DISPLAY ELEVE
/////////////////////////////////////////////////////////////////////////////
//DISPLAY getElevesByCoursId :
$eleve = new Eleve(0, '', '', 1); //coursId
//echo $eleve->getNom();

echo'<br>';
//$eleve->setCoursId(3);
$eleve->getElevesByCoursId(); //display the Eleves that I have under coursId 3

$elevesArray = $eleve->getElevesByCoursId(); //I display all Eleves as an array
echo'<pre>';
var_dump($elevesArray);
echo'</pre>';
echo'<br>';


//////////////////////////////////////////////////////////////////////////////////
//method to DISPLAY EACH ELEVE :
// foreach($elevesArray as $eleve){
//      echo $eleve->displayOneEleve();
// }


//////////////////////////////////////////////////////////////////////////////////
//method to DISPLAY AGE :
//$eleve->displayAgeNextYear();
// $cours = new Cours(0, '',1);
// echo $cours->displayCours();








//////////////////////////////////////////////////////////////////////////////////
// DISPLAY NOM du COURS
$cours = new Cours(0, 'Ashtanga', 2);
//echo $cours->getCours();
echo'<br>';
echo $cours->displayCours();




//////////////////////////////////////////////////////////////////////////////////
// DISPLAY SALLE
$salle = new Salle(0, 0);
echo'<br>';
$salle->setNum(21);
$salle->getSalle();

