<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Jane\OpenApi\Tests\Expected\Model;

class Order
{
    /**
     * @var int
     */
    protected $id;
    /**
     * @var int
     */
    protected $petId;
    /**
     * @var int
     */
    protected $quantity;
    /**
     * @var \DateTime
     */
    protected $shipDate;
    /**
     * @var string
     */
    protected $status;
    /**
     * @var bool
     */
    protected $complete;

    /**
     * @return int
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return self
     */
    public function setId(?int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return int
     */
    public function getPetId(): ?int
    {
        return $this->petId;
    }

    /**
     * @param int $petId
     *
     * @return self
     */
    public function setPetId(?int $petId): self
    {
        $this->petId = $petId;

        return $this;
    }

    /**
     * @return int
     */
    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     *
     * @return self
     */
    public function setQuantity(?int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate(): ?\DateTime
    {
        return $this->shipDate;
    }

    /**
     * @param \DateTime $shipDate
     *
     * @return self
     */
    public function setShipDate(?\DateTime $shipDate): self
    {
        $this->shipDate = $shipDate;

        return $this;
    }

    /**
     * @return string
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * @param string $status
     *
     * @return self
     */
    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    /**
     * @return bool
     */
    public function getComplete(): ?bool
    {
        return $this->complete;
    }

    /**
     * @param bool $complete
     *
     * @return self
     */
    public function setComplete(?bool $complete): self
    {
        $this->complete = $complete;

        return $this;
    }
}
