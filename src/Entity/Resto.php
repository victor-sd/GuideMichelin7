<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RestoRepository")
 */
class Resto
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $chef;

    /**
      * @ORM\Column(type="smallint")
     * @Assert\Regex(pattern="/^[1-3]$/",
     * message="la valeur doit être comprise entre 1 et 3.")
     */
    private $nbrEtoile;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getChef(): ?string
    {
        return $this->chef;
    }

    public function setChef(string $chef): self
    {
        $this->chef = $chef;

        return $this;
    }

    public function getNbrEtoile(): ?string
    {
        return $this->nbrEtoile;
    }

    public function setNbrEtoile(string $nbrEtoile): self
    {
        $this->nbrEtoile = $nbrEtoile;

        return $this;
    }
}
