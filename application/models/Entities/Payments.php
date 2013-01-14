<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 *
 * @Table(name="payments")
 * @Entity
 */
class Payments
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
     * @var integer
     *
     * @Column(name="loanId", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $loanid;

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
     * @var integer
     *
     * @Column(name="dorrowerId", type="integer", precision=0, scale=0, nullable=false, unique=false)
     */
    private $dorrowerid;

    /**
     * @var string
     *
     * @Column(name="paymentAddress", type="string", length=34, precision=0, scale=0, nullable=false, unique=false)
     */
    private $paymentaddress;


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
    public function setLoanid($loanid)
    {
        $this->loanid = $loanid;

        return $this;
    }

    /**
     * Get loanid
     *
     * @return integer 
     */
    public function getLoanid()
    {
        return $this->loanid;
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
     * Set dorrowerid
     *
     * @param integer $dorrowerid
     * @return Payments
     */
    public function setDorrowerid($dorrowerid)
    {
        $this->dorrowerid = $dorrowerid;

        return $this;
    }

    /**
     * Get dorrowerid
     *
     * @return integer 
     */
    public function getDorrowerid()
    {
        return $this->dorrowerid;
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
}