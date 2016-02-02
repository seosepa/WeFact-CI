<?php

/**
 * Class WeFact_Order
 */
class WeFact_Order extends WeFact_Model
{
    /**
     * The order code
     *
     * @var string
     */
    protected $OrderCode;

    /**
     * The debtor Id
     *
     * @var string
     */
    protected $Debtor;

    /**
     * DebtorCode
     *
     * @var string
     */
    protected $DebtorCode;

    /**
     * Date of the order in DateTime
     *
     * @var string
     */
    protected $Date;

    /**
     * Payment Term in days
     *
     * @var int
     */
    protected $Term;

    /**
     * The amount excluding taxes
     *
     * @var float
     */
    protected $AmountExcl;

    /**
     * The amount of taxes
     *
     * @var float
     */
    protected $AmountTax;

    /**
     * The amount including taxes
     *
     * @var float
     */
    protected $AmountIncl;

    /**
     * discount in percent 0 - 100 (for the whole invoice)
     *
     * @var float
     */
    protected $Discount;

    /**
     * excl or incl vat
     *
     * @var string
     */
    protected $VatCalcMethod;

    /**
     * Kortingsmodule negeren (0 = nee en 1 = ja)
     *
     * @var float
     */
    protected $IgnoreDiscount = 0;

    /**
     * coupon code
     *
     * @var string
     */
    protected $Coupon;

    /**
     * Debtor CompanyName (optional)
     *
     * @var string
     */
    protected $CompanyName;

    /**
     * Deptor Sex (optional)
     *  'm', 'f' of 'd'
     *
     * @var string
     */
    protected $Sex;

    /**
     * Debtor initials (optional)
     *
     * @var string
     */
    protected $Initials;

    /**
     * Debtor Surname (optional)
     *
     * @var string
     */
    protected $SurName;

    /**
     * Deptor Address (optional)
     *
     * @var string
     */
    protected $Address;

    /**
     * Debtor ZipCode (optional)
     *
     * @var string
     */
    protected $ZipCode;

    /**
     * Debtor City (optional)
     *
     * @var string
     */
    protected $City;

    /**
     * Debtor Country (optional)
     *
     * @var string
     */
    protected $Country;

    /**
     * Debtor EmailAddress (optional)
     *
     * @var string
     */
    protected $EmailAddress;

    /**
     * method the invoices will be send.
     *
     * 0 = email
     * 1 = snailmail
     * 2 = email + snailmail
     *
     * @var int
     */
    protected $InvoiceMethod;

    /**
     * invoice template, default debtor settings
     *
     * @var string
     */
    protected $Template;

    /**
     * Automagic Incazzo, by default the debtor's preference
     *
     * @var string
     */
    protected $Authorisation;

    /**
     * set order to paid, default 0
     *
     * @var string
     */
    protected $Paid;

    /**
     * wire     Wiretransfer
     * auth     Automagic incazzo
     * paypal   PayPal
     * ideal    iDEAL
     * other    some other online method
     *
     * @var string
     */
    protected $PaymentMethod;

    /**
     * the ID of the (online) payment
     *
     * @var string
     */
    protected $TransactionID;

    /**
     * Debtor $IPAddress
     *
     * @var string
     */
    protected $IPAddress;

    /**
     * Comment
     *
     * @var string
     */
    protected $Comment;

    /**
     * 0    Received
     * 1    In progress
     * 2    Cronjob error, manual intervention needed
     * 8    Processed
     * 9    Cancelled
     *
     * @var string
     */
    protected $Status;

    /**
     * CustomPrices
     *
     * @var WeFact_OrderLine[]
     */
    protected $OrderLines = array();

    /**
     * @return float
     */
    public function getIgnoreDiscount()
    {
        return $this->IgnoreDiscount;
    }

    /**
     * @param float $IgnoreDiscount
     */
    public function setIgnoreDiscount($IgnoreDiscount)
    {
        $this->IgnoreDiscount = $IgnoreDiscount;
    }

    /**
     * @return string
     */
    public function getCoupon()
    {
        return $this->Coupon;
    }

    /**
     * @param string $Coupon
     */
    public function setCoupon($Coupon)
    {
        $this->Coupon = $Coupon;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * @param string $CompanyName
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * @param string $Sex
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;
    }

    /**
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * @param string $Initials
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;
    }

    /**
     * @return string
     */
    public function getSurName()
    {
        return $this->SurName;
    }

    /**
     * @param string $SurName
     */
    public function setSurName($SurName)
    {
        $this->SurName = $SurName;
    }

    /**
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * @param string $Address
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * @param string $ZipCode
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * @param string $City
     */
    public function setCity($City)
    {
        $this->City = $City;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param string $Country
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * @param string $EmailAddress
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;
    }

    /**
     * @return int
     */
    public function getInvoiceMethod()
    {
        return $this->InvoiceMethod;
    }

    /**
     * @param int $InvoiceMethod
     */
    public function setInvoiceMethod($InvoiceMethod)
    {
        $this->InvoiceMethod = $InvoiceMethod;
    }

    /**
     * @return string
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     * @param string $Template
     */
    public function setTemplate($Template)
    {
        $this->Template = $Template;
    }

    /**
     * @return string
     */
    public function getAuthorisation()
    {
        return $this->Authorisation;
    }

    /**
     * @param string $Authorisation
     */
    public function setAuthorisation($Authorisation)
    {
        $this->Authorisation = $Authorisation;
    }

    /**
     * @return string
     */
    public function getPaid()
    {
        return $this->Paid;
    }

    /**
     * @param string $Paid
     */
    public function setPaid($Paid)
    {
        $this->Paid = $Paid;
    }

    /**
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * @param string $PaymentMethod
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;
    }

    /**
     * @return string
     */
    public function getIPAddress()
    {
        return $this->IPAddress;
    }

    /**
     * @param string $IPAddress
     */
    public function setIPAddress($IPAddress)
    {
        $this->IPAddress = $IPAddress;
    }

    /**
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * @param string $TransactionID
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * @param string $Comment
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * @param string $Status
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;
    }

    /**
     * @return WeFact_OrderLine[]
     */
    public function getOrderLines()
    {
        return $this->OrderLines;
    }

    /**
     * @param WeFact_OrderLine[] $OrderLines
     */
    public function setOrderLines($OrderLines)
    {
        $this->OrderLines = $OrderLines;
    }

    /**
     * @param WeFact_OrderLine $orderLine
     */
    public function addOrderLine(WeFact_OrderLine $orderLine)
    {
        $orderLines   = $this->getOrderLines();
        $orderLines[] = $orderLine;
        $this->setOrderLines($orderLines);
    }

    /**
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @param float $Discount
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;
    }

    /**
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }

    /**
     * @param int $Term
     */
    public function setTerm($Term)
    {
        $this->Term = $Term;
    }

    /**
     * @return float
     */
    public function getAmountExcl()
    {
        return $this->AmountExcl;
    }

    /**
     * @param float $AmountExcl
     */
    public function setAmountExcl($AmountExcl)
    {
        $this->AmountExcl = $AmountExcl;
    }

    /**
     * @return float
     */
    public function getAmountTax()
    {
        return $this->AmountTax;
    }

    /**
     * @param float $AmountTax
     */
    public function setAmountTax($AmountTax)
    {
        $this->AmountTax = $AmountTax;
    }

    /**
     * @return float
     */
    public function getAmountIncl()
    {
        return $this->AmountIncl;
    }

    /**
     * @return string
     */
    public function getVatCalcMethod()
    {
        return $this->VatCalcMethod;
    }

    /**
     * @param string $VatCalcMethod
     */
    public function setVatCalcMethod($VatCalcMethod)
    {
        $this->VatCalcMethod = $VatCalcMethod;
    }

    /**
     * @param float $AmountIncl
     */
    public function setAmountIncl($AmountIncl)
    {
        $this->AmountIncl = $AmountIncl;
    }

    /**
     * @return string
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }

    /**
     * @param string $DebtorCode
     */
    public function setDebtorCode($DebtorCode)
    {
        $this->DebtorCode = $DebtorCode;
    }

    /**
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * @param string $Date
     */
    public function setDate($Date)
    {
        $this->Date = $Date;
    }

    /**
     * debtor identifier
     *
     * @return string
     */
    public function getDebtor()
    {
        return $this->Debtor;
    }

    /**
     * @param string $Debtor
     */
    public function setDebtor($Debtor)
    {
        $this->Debtor = $Debtor;
    }

    /**
     * @return string
     */
    public function getOrderCode()
    {
        return $this->OrderCode;
    }

    /**
     * @param string $OrderCode
     */
    public function setOrderCode($OrderCode)
    {
        $this->OrderCode = $OrderCode;
    }

    /**
     * Check if there are any errors in the model data
     */
    public function checkForErrors()
    {
        if ($this->getDebtor() == '' && $this->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('Debtor or DebtorCode must be defined')
            );
        }
        if (count($this->getOrderLines()) == 0) {
            throw new \InvalidArgumentException(
                sprintf('at least one orderline must be defined')
            );
        }
        if (($this->getPaid() === '1' || $this->getPaid() === 1) && $this->getTransactionID() == '') {
            throw new \InvalidArgumentException(
                sprintf('TransactionID must be defined when order has been paid')
            );
        }
    }

    /**
     * @param array $array
     * @return WeFact_Order|null
     */
    protected static function arrayToObject($array)
    {
        /** @var WeFact_Order $order */
        $order           = parent::arrayToObject($array);
        $arrayOrderLines = $order->getOrderLines();
        // remove old array order lines
        $order->setOrderLines(array());
        foreach ($arrayOrderLines as $orderLineArray) {
            if ($orderLineArray instanceof WeFact_OrderLine) {
                $order->addOrderLine($orderLineArray);
            } else {
                /** @var $orderLineArray array */
                $order->addOrderLine(WeFact_OrderLine::arrayToObject($orderLineArray));
            }
        }
        return $order;
    }
}
