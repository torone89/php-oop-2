<?php
include_once __DIR__ . "/creditCard.php";
// CREO VARIABILI
class User
{
    public $firstname;
    public $lastname;
    public $email;
    public $phonenumber;
    public $isRegister;


    // CONSTRUCT 
    public function __construct($firstname, $lastname, $email, $phonenumber, $isRegister,)
    {
        $this->setFirstName($firstname);
        $this->setLastName($lastname);
        $this->setEmail($email);
        $this->setPhonenumber($phonenumber);
        $this->setIsRegister($isRegister);
    }

    /**
     * Get the value of first_name
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    /**
     * Set the value of first_name
     */
    public function setFirstName($firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     */
    public function setLastname($lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of phonenumber
     */
    public function getPhonenumber()
    {
        return $this->phonenumber;
    }

    /**
     * Set the value of phonenumber
     */
    public function setPhonenumber($phonenumber): self
    {
        $this->phonenumber = $phonenumber;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */
    public function setEmail($email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of isRegister
     */
    public function getIsRegister()
    {
        return $this->isRegister;
    }

    /**
     * Set the value of isRegister
     */
    public function setIsRegister($isRegister): self
    {
        $this->isRegister = $isRegister;

        return $this;
    }
}


$user1  = new User("Francesco", "Tovani", "francescotovani@gmail", 3395932622, true, $creditCard2);
$user2 =  new User("Irene", "Grandi", "irendegrandi@gmail", 3935932682, true);
$user3  = new User("Marco", "Giglione", "marcogiglione@gmail", 3295452621, false);
$user4  = new User("Lorenzo", "Pedrini", "lorenzopedrini@gmail", 3325922648, true);
$user5  = new User("Marta", "Guerra", "martaguerra@gmail", 3387050280, false);
$user6  = new User("Laura", "Rossi", "laurarossi@gmail", 322598486, true);
print_r(get_object_vars($user1));
$users = [$user1, $user2, $user3, $user4, $user5, $user6];
