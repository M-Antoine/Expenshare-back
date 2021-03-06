<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity
 */
class Category
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="bigint", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=255, nullable=false)
     */
    private $label;

    /**
     * @var string|null
     *
     * @ORM\Column(name="icon", type="string", length=255, nullable=true)
     */
    private $icon;

    /** @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\OneToMany(targetEntity="Expense", mappedBy="category")
     */
    private $expense;

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getExpense(): \Doctrine\Common\Collections\Collection
    {
        return $this->expense;
    }

    /**
     * @param \Doctrine\Common\Collections\Collection $expense
     */
    public function setExpense(\Doctrine\Common\Collections\Collection $expense): void
    {
        $this->expense = $expense;
    }


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): self
    {
        $this->label = $label;

        return $this;
    }

    public function getIcon(): ?string
    {
        return $this->icon;
    }

    public function setIcon(?string $icon): self
    {
        $this->icon = $icon;

        return $this;
    }


}
