<?php

class Circle extends Ellipse
{
	public function draw(SvgRenderer $renderer)
	{
		// Utilisation de l'objet renderer pour dessiner un cercle avec ses propriétés.
		$renderer->drawCircle
		(
			$this->location,
			$this->color,
			$this->opacity, 
			$this->xRadius
		);
	}

    // On veut surcharger la méthode setRadius() de l'ellipse pour qu'elle fonctionne différemment. Problème : la surcharge en PHP oblige à respécifier tous les arguments de la méthode originale, or on n'a besoin que d'un seul argument pour spécifier le rayon d'un cercle.
     // $circle->setCircle(100, 0); <==== le 0 est de trop mais obligatoire. On peut donc rendre le deuxième argument optionnel, en le définissant directement dans les paramètres de la fonction
	public function setRadius($radius, $yRadius = 0)
	{
		$this->xRadius = $radius;
		$this->yRadius = $radius;
	}
}