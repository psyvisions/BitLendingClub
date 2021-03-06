<?php

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @Table(name="payments")
 * @Entity(repositoryClass="Repository_Payments")
 */
class Entity_Payments
{

    /**
     * @var integer
     *
     * @Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="Entity_Loans")
     * @JoinColumns({
     *   @JoinColumn(name="loanId", referencedColumnName="id", nullable=true)
     * })
     */
    private $loan;

    /**
     * @var float
     *
     * @Column(name="amount", type="decimal", precision=0, scale=0, nullable=false, unique=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @Column(name="dueDate", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $duedate;

    /**
     * @var \DateTime
     *
     * @Column(name="datePosted", type="datetime", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dateposted;

    /**
     * @var User
     *
     * @ManyToOne(targetEntity="Entity_Users")
     * @JoinColumns({
     *   @JoinColumn(name="borrowerId", referencedColumnName="id", nullable=true)
     * })
     */
    private $borrower;

    /**
     * @var string
     *
     * @Column(name="paymentAddress", type="string", length=34, precision=0, scale=0, nullable=false, unique=false)
     */
    private $paymentaddress;

    /**
     * @var integer
     *
     * @Column(name="type", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $type;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loanid
     *
     * @param integer $loanid
     * @return Payments
     */
    public function setLoan($loan)
    {
        $this->loan = $loan;
        return $this;
    }

    /**
     * Get loanid
     *
     * @return integer 
     */
    public function getLoan()
    {
        return $this->loan;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return Payments
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set duedate
     *
     * @param \DateTime $duedate
     * @return Payments
     */
    public function setDuedate($duedate)
    {
        $this->duedate = $duedate;

        return $this;
    }

    /**
     * Get duedate
     *
     * @return \DateTime 
     */
    public function getDuedate()
    {
        return $this->duedate;
    }

    /**
     * Set dateposted
     *
     * @param \DateTime $dateposted
     * @return Payments
     */
    public function setDateposted($dateposted)
    {
        $this->dateposted = $dateposted;

        return $this;
    }

    /**
     * Get dateposted
     *
     * @return \DateTime 
     */
    public function getDateposted()
    {
        return $this->dateposted;
    }

    /**
     * Set borrower
     *
     * @param integer $dorrowerid
     * @return Entity_Borrower
     */
    public function setBorrower($borrower)
    {
        $this->borrower = $borrower;

        return $this;
    }

    /**
     * Get borrower
     *
     * @return integer 
     */
    public function getBorrower()
    {
        return $this->borrower;
    }

    /**
     * Set paymentaddress
     *
     * @param string $paymentaddress
     * @return Payments
     */
    public function setPaymentaddress($paymentaddress)
    {
        $this->paymentaddress = $paymentaddress;

        return $this;
    }

    /**
     * Get paymentaddress
     *
     * @return string 
     */
    public function getPaymentaddress()
    {
        return $this->paymentaddress;
    }
    /**
     * 
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }
    
    /**
     * 
     * @param type $type
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

}
