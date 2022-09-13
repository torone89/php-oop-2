
<?php

class CreditCard
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

    // funzione per vedere se la carta è scaduta 
    public function isExpiry()
    {
        $today = strtotime(date("d-m-Y"));
        return $this->expiryDate < $today;
    }


    /**
     * Get the value of expiryDate
     */
    public function getExpiryDate()
    {
        return date("d-m-y", $this->expiryDate); // la trasformo in striga con data all'italiana
    }

    /**
     * Set the value of expiryDate
     */
    public function setExpiryDate($expiryDate): self
    {
        $this->expiryDate = strtotime($expiryDate); //inizializzo come una stringa e la trasformo in una data

        return $this;
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
}

?>