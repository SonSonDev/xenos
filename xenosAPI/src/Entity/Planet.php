<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\PlanetRepository")
 */
class Planet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=400)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=200, nullable=true)
     */
    private $img;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $colorStart;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $colorEnd;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $video;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Zone", mappedBy="planet", orphanRemoval=true)
     */
    private $zones;

    public function __construct()
    {
        $this->zones = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImg(): ?string
    {
        return $this->img;
    }

    public function setImg(?string $img): self
    {
        $this->img = $img;

        return $this;
    }

    public function getColorStart(): ?string
    {
        return $this->colorStart;
    }

    public function setColorStart(?string $colorStart): self
    {
        $this->colorStart = $colorStart;

        return $this;
    }

    public function getColorEnd(): ?string
    {
        return $this->colorEnd;
    }

    public function setColorEnd(?string $colorEnd): self
    {
        $this->colorEnd = $colorEnd;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(?string $video): self
    {
        $this->video = $video;

        return $this;
    }

    /**
     * @return Collection|Zone[]
     */
    public function getZones(): Collection
    {
        return $this->zones;
    }

    public function addZone(Zone $zone): self
    {
        if (!$this->zones->contains($zone)) {
            $this->zones[] = $zone;
            $zone->setPlanet($this);
        }

        return $this;
    }

    public function removeZone(Zone $zone): self
    {
        if ($this->zones->contains($zone)) {
            $this->zones->removeElement($zone);
            // set the owning side to null (unless already changed)
            if ($zone->getPlanet() === $this) {
                $zone->setPlanet(null);
            }
        }

        return $this;
    }
}
