<?php

namespace AppBundle\Form\Model\Payment;

class InitPayment
{
    const PLATFORM_TYPE_WEB = 'WEB';
    const PLATFORM_TYPE_APP = 'APP';
    const PLATFORM_TYPE_MOB = 'MOB';

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $customerEmail;

    /**
     * @var string
     */
    private $geoCountry;

    /**
     * @var string
     */
    private $ipAddress;

    /**
     * @var string
     */
    private $orderId;

    /**
     * @var string
     */
    private $orderDescription;

    /**
     * @var string
     */
    private $platform;

    /**
     * @param float $amount
     * @param string $currency
     * @param string $customerEmail
     * @param string $geoCountry
     * @param string $ipAddress
     * @param string $orderId
     * @param string $orderDescription
     * @param string $platform
     */
    public function __construct(
        float $amount,
        string $currency,
        string $customerEmail,
        string $geoCountry,
        string $ipAddress,
        string $orderId,
        string $orderDescription,
        string $platform = self::PLATFORM_TYPE_WEB
    ) {
        $this->amount = $amount;
        $this->currency = $currency;
        $this->customerEmail = $customerEmail;
        $this->geoCountry = $geoCountry;
        $this->ipAddress = $ipAddress;
        $this->orderId = $orderId;
        $this->orderDescription = $orderDescription;
        $this->platform = $platform;
    }

    /**
     * @return string
     */
    public function getPlatform(): string
    {
        return $this->platform;
    }

    /**
     * @return float
     */
    public function getAmount(): float
    {
        return $this->amount;
    }

    /**
     * @return string
     */
    public function getCustomerEmail(): string
    {
        return $this->customerEmail;
    }

    /**
     * @return string
     */
    public function getGeoCountry(): string
    {
        return $this->geoCountry;
    }

    /**
     * @return string
     */
    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    /**
     * @return string
     */
    public function getOrderId(): string
    {
        return $this->orderId;
    }

    /**
     * @return string
     */
    public function getOrderDescription(): string
    {
        return $this->orderDescription;
    }
}
