<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SliderRepository")
 * @Vich\Uploadable()
 */
class Slider
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
    private $name;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Page", inversedBy="slider", cascade={"persist"})
     */
    private $page;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     * @Assert\Image(mimeTypes="image/jpeg")
     */
    private $image1;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="slider_image", fileNameProperty="image1")
     */
    private $imageFile1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     * @Assert\Image(mimeTypes="image/jpeg")
     */
    private $image2;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="slider_image", fileNameProperty="image2")
     */
    private $imageFile2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string|null
     * @Assert\Image(mimeTypes="image/jpeg")
     */
    private $image3;

    /**
     * @var File|null
     * @Vich\UploadableField(mapping="slider_image", fileNameProperty="image3")
     */
    private $imageFile3;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    public function getId(): ?int
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

    public function getPage(): ?Page
    {
        return $this->page;
    }

    public function setPage(?Page $page): self
    {
        $this->page = $page;

        return $this;
    }

    public function getImage1(): ?string
    {
        return $this->image1;
    }

    public function setImage1(?string $image1): self
    {
        $this->image1 = $image1;

        return $this;
    }

    public function getImage2(): ?string
    {
        return $this->image2;
    }

    public function setImage2(?string $image2): self
    {
        $this->image2 = $image2;

        return $this;
    }

    public function getImage3(): ?string
    {
        return $this->image3;
    }

    public function setImage3(?string $image3): self
    {
        $this->image3 = $image3;

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * @return File|null
     */
    public function getImageFile1(): ?File
    {
        return $this->imageFile1;
    }

    /**
     * @param File|null $imageFile1
     */
    public function setImageFile1(?File $imageFile1): void
    {
        $this->imageFile1 = $imageFile1;
    }

    /**
     * @return File|null
     */
    public function getImageFile3(): ?File
    {
        return $this->imageFile3;
    }

    /**
     * @param File|null $imageFile3
     */
    public function setImageFile3(?File $imageFile3): void
    {
        $this->imageFile3 = $imageFile3;
    }

    /**
     * @return File|null
     */
    public function getImageFile2(): ?File
    {
        return $this->imageFile2;
    }

    /**
     * @param File|null $imageFile2
     */
    public function setImageFile2(?File $imageFile2): void
    {
        $this->imageFile2 = $imageFile2;
    }
}
