<?php
  $randomNumberQuestion = rand(1, 10) ;
  $randomNumberTheme = rand(1,5);

  // Choix du theme avec le $randomNumberTheme.

  if ($randomNumberTheme == 1) {
    $theme == "CultureG";
  } elseif ($randomNumberTheme == 2) {
    $theme == "HistoireGeo";
  } elseif ($randomNumberTheme == 3) {
    $theme == "PopCulture";
  } elseif ($randomNumberTheme == 4) {
    $theme == "Musique";
  } else {
    $theme == "Error";
  }


  // Choix de la question avec le $randomNumberQuestion.



  if ($theme = 'CultureG') {
    $themeQuestion = "Voici une question de culture G";
    if ($randomNumberQuestion == 1) {
      $question = "Question 1";
    } elseif ($randomNumberQuestion == 2) {
      $question = "Question 2";
    } elseif ($randomNumberQuestion == 3) {
      $question = "Question 3";
    } elseif ($randomNumberQuestion == 4) {
      $question = "Question 4";
    } elseif ($randomNumberQuestion == 5) {
      $question = "Question 5";
    } elseif ($randomNumberQuestion == 6) {
      $question = "Question 6";
    } elseif ($randomNumberQuestion == 7) {
      $question = "Question 7";
    } elseif ($randomNumberQuestion == 8) {
      $question = "Question 8";
    } elseif ($randomNumberQuestion == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
  } elseif ($theme = 'HistoireGeo') {
    $themeQuestion = "Voici une question d'histoire geographie";
    if ($randomNumberQuestion == 1) {
      $question = "Question 1";
    } elseif ($randomNumberQuestion == 2) {
      $question = "Question 2";
    } elseif ($randomNumberQuestion == 3) {
      $question = "Question 3";
    } elseif ($randomNumberQuestion == 4) {
      $question = "Question 4";
    } elseif ($randomNumberQuestion == 5) {
      $question = "Question 5";
    } elseif ($randomNumberQuestion == 6) {
      $question = "Question 6";
    } elseif ($randomNumberQuestion == 7) {
      $question = "Question 7";
    } elseif ($randomNumberQuestion == 8) {
      $question = "Question 8";
    } elseif ($randomNumberQuestion == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
  } elseif ($theme = 'PopCulture') {
    $themeQuestion = "Voici une question de Pop Culture";
      if ($randomNumberQuestion == 1) {
        $question = "Question 1";
    } elseif ($randomNumberQuestion == 2) {
      $question = "Question 2";
    } elseif ($randomNumberQuestion == 3) {
      $question = "Question 3";
    } elseif ($randomNumberQuestion == 4) {
      $question = "Question 4";
    } elseif ($randomNumberQuestion == 5) {
      $question = "Question 5";
    } elseif ($randomNumberQuestion == 6) {
      $question = "Question 6";
    } elseif ($randomNumberQuestion == 7) {
      $question = "Question 7";
    } elseif ($randomNumberQuestion == 8) {
      $question = "Question 8";
    } elseif ($randomNumberQuestion == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
  } elseif ($theme = "Musique") {
    $themeQuestion == "Voici une question sur la musique";
      if ($randomNumberQuestion == 1) {
        $question = "Question 1";
    } elseif ($randomNumberQuestion == 2) {
      $question = "Question 2";
    } elseif ($randomNumberQuestion == 3) {
      $question = "Question 3";
    } elseif ($randomNumberQuestion == 4) {
      $question = "Question 4";
    } elseif ($randomNumberQuestion == 5) {
      $question = "Question 5";
    } elseif ($randomNumberQuestion == 6) {
      $question = "Question 6";
    } elseif ($randomNumberQuestion == 7) {
      $question = "Question 7";
    } elseif ($randomNumberQuestion == 8) {
      $question = "Question 8";
    } elseif ($randomNumberQuestion == 9) {
      $question = "Question 9";
    }  else {
        $question = "La question ne peux pas etre charger. Relance";
        //
      }
    }elseif ($theme == "Error") {
      $themeQuestion = "Une erreur a eu lieu sur la choix du theme";
    }
     else {
    $themeQuestion = "Vous n'avez pas choisi de theme";

  }


?>
