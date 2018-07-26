<?php

$url = 'https://discordapp.com/api/webhooks/472091376260218912/5vM6u09k_VO8zeB5GoibJ5k4HBlfV3i04KoplUsOO2fHjLRbgWazJK5kITTTyEX2Qcbc';

$data = array(
  'content' => "Bonjour je test quelque chose",
  'avatar_url' => 'https://cdn.discordapp.com/avatars/198515308007391233/29843fb3b148b4a16f46c5bd990c8a2b.png?size=128&quot;);%22%3E',
  'embeds' => array(
    array(
      'title' => 'Message a la HEFIGANG', // Intitulé du lien
      'url' => '', // Adresse du lien
      'description' => 'Je vend de la pure à 90%', // Texte affiché après le titre

      // Image, Miniature, Auteur et Footer son optionnels

      /*
       * Ajouter une image
       */
      'image' => array(
        'url' => '', // (jaune) Adresse de l'image
        'width' => 0, // Largeur de l'image
        'height' => 0 // Hauteur de l'image
      ),
      /*
       * Ajouter une miniature
       */
      'thumbnail' => array(
        'url' => 'https://image.noelshack.com/fichiers/2018/30/4/1532637310-bitcoin-icon.png', // (vert) Adresse de l'image
        'width' => 80px // Largeur de l'image
        'height' => 80px // Hauteur de l'image
      ),
      /*
       * Ajouter un auteur
       */
      'author' => array(
        'name' => '', // Nom de l'auteur
        'url' => '', // Adresse de l'auteur
        'icon_url' => '' // (bleu foncé) Avatar de l'ateur
      ),
      /*
       * Ajouter une mention en pied de page
       */
      'footer' => array(
        'text' => 'ALL RIGHTS RESERVED - FLEXUS', // Texte à afficher
        'icon_url' => 'https://image.noelshack.com/fichiers/2018/30/4/1532636895-fl.png' // (bleu clair) URL de l'image
      )
    )
  ),
);

$context = array(
  'http' => array(
    'method' => 'POST',
    'header' => "Content-type: application/json\r\n",
    'content' => json_encode($data),
  )
);

/*
 * Attention, certains serveurs désactivent la fonction 'allow_url_fopen'.
 * Si c'est votre cas et si vous ne pouvez pas l'activer, vous ne pourrez
 * pas utiliser ce script directement. Vous devrez utiliser cURL !
 */

$context  = stream_context_create($context);
$result = @file_get_contents($url, false, $context);

if($result === false) {
  return false;
}

return true;
