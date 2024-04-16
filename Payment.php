<?php

class Payment
{
    /** @var string */
    private string $name;
    /** @var string */
    private string $paymentMethod;
    /** @var DateTime */
    private DateTime $paymentDate;
    /** @var float */
    private float $amount;

    /**
     * @param float $amount
     * @param string $paymentMethod
     * @param DateTime $paymentDate
     * @param string $name
     */
    public function __construct(string $name, string $paymentMethod, DateTime $paymentDate, float $amount)
    {
        $this->name = $name;
        $this->paymentMethod = $paymentMethod;
        $this->paymentDate = $paymentDate;
        $this->amount = $amount;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param $name
     * @return void
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }

    /**
     * @param $paymentMethod
     * @return void
     */
    public function setPaymentMethod($paymentMethod): void
    {
        $this->paymentMethod = $paymentMethod;
    }

    /**
     * @return DateTime
     */
    public function getPaymentDate(): DateTime
    {
        return $this->paymentDate;
    }

    public function setPaymentDate(DateTime $paymentDate): void
    {
        $this->paymentDate = $paymentDate;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return void
     */
    public function setAmount(float $amount): void
    {
        $this->amount = $amount;
    }
}