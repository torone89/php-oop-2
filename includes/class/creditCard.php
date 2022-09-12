<!-- CLASSE FIGLIA DI USER:
 DETTAGLI CARTA DI CREDITO -->

<?php
require_once __DIR__ . "/user.php.php";
class CreditCard extends User
{

    // variables

    private $numberCard;
    private $cvv;
    private $expiryDate;

    // construct
    function __construct($firstname, $lastname, $numberCard, $cvv, $expiryDate)
    {
        parent::__construct($firstname, $lastname);

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



?>