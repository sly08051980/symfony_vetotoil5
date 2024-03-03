<?php

namespace App\Entity;

use App\Repository\PatientRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PatientRepository::class)]
class Patient
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 50)]
    private ?string $prenom_patient = null;

    #[ORM\Column(length: 255)]
    private ?string $adresse_patient = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $complement_adresse_patient = null;

    #[ORM\Column(length: 5)]
    private ?string $code_postal_patient = null;

    #[ORM\Column(length: 50)]
    private ?string $ville_patient = null;

    #[ORM\Column(length: 10)]
    private ?string $telephone_patient = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $date_creation_patient = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_fin_patient = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrenomPatient(): ?string
    {
        return $this->prenom_patient;
    }

    public function setPrenomPatient(string $prenom_patient): static
    {
        $this->prenom_patient = $prenom_patient;

        return $this;
    }

    public function getAdressePatient(): ?string
    {
        return $this->adresse_patient;
    }

    public function setAdressePatient(string $adresse_patient): static
    {
        $this->adresse_patient = $adresse_patient;

        return $this;
    }

    public function getComplementAdressePatient(): ?string
    {
        return $this->complement_adresse_patient;
    }

    public function setComplementAdressePatient(?string $complement_adresse_patient): static
    {
        $this->complement_adresse_patient = $complement_adresse_patient;

        return $this;
    }

    public function getCodePostalPatient(): ?string
    {
        return $this->code_postal_patient;
    }

    public function setCodePostalPatient(string $code_postal_patient): static
    {
        $this->code_postal_patient = $code_postal_patient;

        return $this;
    }

    public function getVillePatient(): ?string
    {
        return $this->ville_patient;
    }

    public function setVillePatient(string $ville_patient): static
    {
        $this->ville_patient = $ville_patient;

        return $this;
    }

    public function getTelephonePatient(): ?string
    {
        return $this->telephone_patient;
    }

    public function setTelephonePatient(string $telephone_patient): static
    {
        $this->telephone_patient = $telephone_patient;

        return $this;
    }

    public function getDateCreationPatient(): ?\DateTimeInterface
    {
        return $this->date_creation_patient;
    }

    public function setDateCreationPatient(\DateTimeInterface $date_creation_patient): static
    {
        $this->date_creation_patient = $date_creation_patient;

        return $this;
    }

    public function getDateFinPatient(): ?\DateTimeInterface
    {
        return $this->date_fin_patient;
    }

    public function setDateFinPatient(?\DateTimeInterface $date_fin_patient): static
    {
        $this->date_fin_patient = $date_fin_patient;

        return $this;
    }
}
