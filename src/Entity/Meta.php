<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MetaRepository")
 */
class Meta
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
    private $Title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ogtitle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ogurl;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ogimage;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ogdescription;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->Title;
    }

    public function setTitle(string $Title): self
    {
        $this->Title = $Title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getOgtitle(): ?string
    {
        return $this->ogtitle;
    }

    public function setOgtitle(string $ogtitle): self
    {
        $this->ogtitle = $ogtitle;

        return $this;
    }

    public function getOgurl(): ?string
    {
        return $this->ogurl;
    }

    public function setOgurl(string $ogurl): self
    {
        $this->ogurl = $ogurl;

        return $this;
    }

    public function getOgimage(): ?string
    {
        return $this->ogimage;
    }

    public function setOgimage(string $ogimage): self
    {
        $this->ogimage = $ogimage;

        return $this;
    }

    public function getOgdescription(): ?string
    {
        return $this->ogdescription;
    }

    public function setOgdescription(string $ogdescription): self
    {
        $this->ogdescription = $ogdescription;

        return $this;
    }
}
