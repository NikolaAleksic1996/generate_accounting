<?php

class Reservation
{
    /** @var int */
    private int $id;
    /** @var float */
    private float $pricePerNight;
    /** @var DateTime */
    private DateTime $startDate;
    /** @var DateTime */
    private DateTime $endDate;
    /** @var string */
    private string $currency;

    /**
     * @param int $id
     * @param float $pricePerNight
     * @param DateTime $startDate
     * @param DateTime $endDate
     * @param string $currency
     */
    public function __construct(int $id, float $pricePerNight, DateTime $startDate, DateTime $endDate, string $currency)
    {
        $this->id = $id;
        $this->pricePerNight = $pricePerNight;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
        $this->currency = $currency;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return void
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return float
     */
    public function getPricePerNight(): float
    {
        return $this->pricePerNight;
    }

    /**
     * @param $pricePerNight
     * @return void
     */
    public function setPricePerNight($pricePerNight): void
    {
        $this->pricePerNight = $pricePerNight;
    }

    /**
     * @return DateTime
     */
    public function getStartDate(): DateTime
    {
        return $this->startDate;
    }

    /**
     * @param DateTime $startDate
     * @return void
     */
    public function setStartDate(DateTime $startDate): void
    {
        $this->startDate = $startDate;
    }

    /**
     * @return DateTime
     */
    public function getEndDate(): DateTime
    {
        return $this->endDate;
    }

    /**
     * @param $endDate
     * @return void
     */
    public function setEndDate($endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getCurrency(): string
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return void
     */
    public function setCurrency(string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * @return float
     */
    public function getTotalPrice(): float
    {
        $totalDays = $this->getStartDate()->diff($this->getEndDate())->days;
        return $totalDays * $this->getPricePerNight();
    }
}