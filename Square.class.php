<?php

class Square extends Rectangle
{
     // On veut surcharger la méthode setSize() du rectangle pour qu'elle fonctionne différemment. Problème : la surcharge en PHP oblige à respécifier tous les arguments de la méthode originale, or on n'a besoin que d'un seul argument pour spécifier la taille d'un carré
          // $square->setSize(100, 0); <==== le 0 est de trop mais obligatoire. On peut donc rendre le deuxième argument optionnel, en le définissant directement dans les paramètres de la fonction
	public function setSize($size, $height = 0)
	{
		$this->height = $size;
		$this->width  = $size;
	}
}