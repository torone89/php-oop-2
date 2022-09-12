
<?php

class CreditCard extends User
{

    // variables

    private $numberCard;
    private $cvv;
    private $expiryDate;

    // construct
    function __construct($numberCard, $cvv, $expiryDate)
    {

        $this->setNumberCard($numberCard);
        $this->setCvv($cvv);
        $this->setExpiryDate($expiryDate);
    }

    /**
     * Get the value of numberCard
     */
    public function getNumberCard()
    {
        return $this->numberCard;
    }

    /**
     * Set the value of numberCard
     */
    public function setNumberCard($numberCard): self
    {
        $this->numberCard = $numberCard;

        return $this;
    }

    /**
     * Get the value of cvv
     */
    public function getCvv()
    {
        return $this->cvv;
    }

    /**
     * Set the value of cvv
     */
    public function setCvv($cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    /**
     * Get the value of expiryDate
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * Set the value of expiryDate
     */
    public function setExpiryDate($expiryDate): self
    {
        $this->expiryDate = $expiryDate;

        return $this;
    }
}

$creditCard1 = new CreditCard("1111-2222-3333-4444", "230", "12-27");

$creditCard2 = new CreditCard("2222-3333-4444-5555", "562", "08-24");



?>