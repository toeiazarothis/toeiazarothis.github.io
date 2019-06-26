<?php
  $randomNumber = rand(1, 10) ;

  $theme = $_POST['ThemeDeLaQuestion'];

  if ($theme == 'CultureG') {
    $themeQuestion = "Voici une question de culture G";
    if ($randomNumber == 1) {
      $question = "Question 1";
    } elseif ($randomNumber == 2) {
      $question = "Question 2";
    } elseif ($randomNumber == 3) {
      $question = "Question 3";
    } elseif ($randomNumber == 4) {
      $question = "Question 4";
    } elseif ($randomNumber == 5) {
      $question = "Question 5";
    } elseif ($randomNumber == 6) {
      $question = "Question 6";
    } elseif ($randomNumber == 7) {
      $question = "Question 7";
    } elseif ($randomNumber == 8) {
      $question = "Question 8";
    } elseif ($randomNumber == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
  } elseif ($theme == 'HistoireGeo') {
    $themeQuestion = "Voici une question d'histoire geographie";
    if ($randomNumber == 1) {
      $question = "Question 1";
    } elseif ($randomNumber == 2) {
      $question = "Question 2";
    } elseif ($randomNumber == 3) {
      $question = "Question 3";
    } elseif ($randomNumber == 4) {
      $question = "Question 4";
    } elseif ($randomNumber == 5) {
      $question = "Question 5";
    } elseif ($randomNumber == 6) {
      $question = "Question 6";
    } elseif ($randomNumber == 7) {
      $question = "Question 7";
    } elseif ($randomNumber == 8) {
      $question = "Question 8";
    } elseif ($randomNumber == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
  } else {
    $themeQuestion = "Vous n'avez pas choisi de theme";

  }


?>
