<?php

/**
 * Class WeFact_Invoice
 */
class WeFact_Invoice extends WeFact_Model
{
    /**
     * The invoice code
     *
     * @var string
     */
    protected $InvoiceCode;

    /**
     * The unique ID of a debtor
     *
     * @var int
     */
    protected $Debtor;

    /**
     * The debtor code
     *
     * @var string
     */
    protected $DebtorCode;
    /**
     * The invoice status
     * This can be 0 for concept, 2 for sent, 3 for accepted, 4 for created,
     * 8 for not accepted.
     *
     * @var string
     */
    protected $Status;
    /**
     * The SubStatus
     *
     * @var string
     */
    protected $SubStatus;

    /**
     * The date of the invoice
     *
     * @var string
     */
    protected $Date;

    /**
     * The payment term
     *
     * @var int
     */
    protected $Term;

    /**
     * payBefore Date
     *
     * @var string
     */
    protected $PayBefore;

    /**
     * The PaymentURL
     *
     * @var string
     */
    protected $PaymentURL;

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
     * The TaxRate
     *
     * @var float
     */
    protected $TaxRate;

    /**
     * The Compound
     *
     * @var string
     */
    protected $Compound;

    /**
     * The amount already paid
     *
     * @var float
     */
    protected $AmountPaid;

    /**
     * The Discount percentage on the invoice (1-100)
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
     * The Coupon/voucher code
     *
     * @var string
     */
    protected $IgnoreDiscount;

    /**
     * The Coupon/voucher code
     *
     * @var string
     */
    protected $Coupon;

    /**
     * The reference number
     *
     * @var string
     */
    protected $ReferenceNumber;

    /**
     * The debtors company name
     *
     * @var string
     */
    protected $CompanyName;

    /**
     * The debtors sex (m or f)
     *
     * @var string
     */
    protected $Sex;

    /**
     * The debtors initials
     *
     * @var string
     */
    protected $Initials;

    /**
     * The debtors SurName
     *
     * @var string
     */
    protected $SurName;

    /**
     * The debtors address
     *
     * @var string
     */
    protected $Address;

    /**
     * The debtors zipcode
     *
     * @var string
     */
    protected $ZipCode;

    /**
     * The debtors city
     *
     * @var string
     */
    protected $City;

    /**
     * The debtors country (ISO_3166-1)
     *
     * @var string
     */
    protected $Country;

    /**
     * The debtors email address
     *
     * @var string
     */
    protected $EmailAddress;

    /**
     * The invoice method
     * 0 = by email
     * 1 = by mail
     * 3 = by post and mail
     *
     * @var int
     */
    protected $InvoiceMethod;

    /**
     * The Template
     *
     * @var int
     */
    protected $Template;

    /**
     * The sent date of the invoice
     *
     * @var string
     */
    protected $SentDate;

    /**
     * The amount of times the invoice has been sent
     *
     * @var int
     */
    protected $Sent;

    /**
     * The amount of reminders that have been sent
     *
     * @var int
     */
    protected $Reminders;

    /**
     * The date of the last sent reminder
     *
     * @var string
     */
    protected $ReminderDate;

    /**
     * The amount of summations that have been sent
     *
     * @var int
     */
    protected $Summations;

    /**
     * The date of the last sent summation
     *
     * @var string
     */
    protected $SummationDate;

    /**
     * Authorization for direct debit
     * This can either be 'yes' or 'no' by default it will be the debtors
     * preference.
     *
     * @var string
     */
    protected $Authorisation;

    /**
     * The payment method
     * Can be 'wire', 'auth', 'paypal', 'ideal' or 'other'
     *
     * @var string
     */
    protected $PaymentMethod;

    /**
     * The date the payment was made
     *
     * @var string
     */
    protected $PayDate;

    /**
     * The transaction id of the (online) payment
     *
     * @var string
     */
    protected $TransactionID;

    /**
     * The description of the invoice
     *
     * @var string
     */
    protected $Description;

    /**
     * The internal comments associated with the invoice
     *
     * @var string
     */
    protected $Comment;

    /**
     * The InvoiceLines
     *
     * @var array
     */
    protected $InvoiceLines = array();

    /**
     * @return int
     */
    public function getIdentifier()
    {
        return $this->Identifier;
    }

    /**
     * @param int $Identifier
     */
    public function setIdentifier($Identifier)
    {
        $this->Identifier = $Identifier;
    }

    /**
     * Gets the The invoice code.
     *
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->InvoiceCode;
    }

    /**
     * Sets the The invoice code.
     *
     * @param string $InvoiceCode the invoice code
     *
     * @return WeFact_Invoice
     */
    public function setInvoiceCode($InvoiceCode)
    {
        $this->InvoiceCode = $InvoiceCode;

        return $this;
    }

    /**
     * Gets the The unique ID of a debtor.
     *
     * @return int
     */
    public function getDebtor()
    {
        return $this->Debtor;
    }

    /**
     * Sets the The unique ID of a debtor.
     *
     * @param int $Debtor the debtor
     *
     * @return WeFact_Invoice
     */
    public function setDebtor($Debtor)
    {
        $this->Debtor = $Debtor;

        return $this;
    }

    /**
     * Gets the The debtor code.
     *
     * @return string
     */
    public function getDebtorCode()
    {
        return $this->DebtorCode;
    }

    /**
     * Sets the The debtor code.
     *
     * @param string $DebtorCode the debtor code
     *
     * @return WeFact_Invoice
     */
    public function setDebtorCode($DebtorCode)
    {
        $this->DebtorCode = $DebtorCode;

        return $this;
    }

    /**
     * Gets the The invoice status
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the The invoice status
     * This can be 0 for concept, 2 for sent, 3 for accepted, 4 for created,
     * 8 for not accepted.
     *
     * @param int $Status the status
     *
     * @return WeFact_Invoice
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * 0 Concept Invoice
     * 2 Send
     * 3 partially paid
     * 4 paid
     * 8 CreditInvoice
     * 9 Expired
     *
     * @return string
     */
    public function getSubStatus()
    {
        return $this->SubStatus;
    }

    /**
     * Set SubStatus
     *
     * 0 Concept Invoice
     * 2 Send
     * 3 partially paid
     * 4 paid
     * 8 CreditInvoice
     * 9 Expired
     *
     * @param string $SubStatus
     */
    public function setSubStatus($SubStatus)
    {
        $this->SubStatus = $SubStatus;
    }

    /**
     * Gets the The date of the invoice.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Sets the The date of the invoice.
     *
     * @param string $Date the date
     *
     * @return WeFact_Invoice
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Gets the The payment term in days.
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }

    /**
     * Sets the The payment term in amount of days.
     *
     * @param int $Term the term
     *
     * @return WeFact_Invoice
     */
    public function setTerm($Term)
    {
        $this->Term = $Term;

        return $this;
    }

    /**
     * @return string
     */
    public function getPayBefore()
    {
        return $this->PayBefore;
    }

    /**
     * @return string
     */
    public function getPaymentURL()
    {
        return $this->PaymentURL;
    }

    /**
     * @return float
     */
    public function getAmountExcl()
    {
        return $this->AmountExcl;
    }

    /**
     * @return float
     */
    public function getAmountTax()
    {
        return $this->AmountTax;
    }

    /**
     * @return float
     */
    public function getAmountIncl()
    {
        return $this->AmountIncl;
    }

    /**
     * @return float
     */
    public function getTaxRate()
    {
        return $this->TaxRate;
    }

    /**
     * @return string
     */
    public function getCompound()
    {
        return $this->Compound;
    }

    /**
     * Gets the The amount already paid.
     *
     * @return float
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }

    /**
     * Sets the The amount already paid.
     *
     * @param float $AmountPaid the amount paid
     *
     * @return WeFact_Invoice
     */
    public function setAmountPaid($AmountPaid)
    {
        $this->AmountPaid = $AmountPaid;

        return $this;
    }

    /**
     * @return string
     */
    public function getVatCalcMethod()
    {
        return $this->VatCalcMethod;
    }

    /**
     * Gets the The Discount percentage on the invoice (1-100).
     *
     * @return float
     */
    public function getDiscount()
    {
        return $this->Discount;
    }

    /**
     * @return string
     */
    public function getIgnoreDiscount()
    {
        return $this->IgnoreDiscount;
    }

    /**
     * 0 = no , 1 = yes
     *
     * @param string $IgnoreDiscount
     */
    public function setIgnoreDiscount($IgnoreDiscount)
    {
        $this->IgnoreDiscount = $IgnoreDiscount;
    }

    /**
     * Sets the The Discount percentage on the invoice (1-100).
     *
     * @param float $Discount the discount
     *
     * @return WeFact_Invoice
     */
    public function setDiscount($Discount)
    {
        $this->Discount = $Discount;

        return $this;
    }

    /**
     * Gets the The Coupon/voucher code.
     *
     * @return string
     */
    public function getCoupon()
    {
        return $this->Coupon;
    }

    /**
     * Sets the The Coupon/voucher code.
     *
     * @param string $Coupon the coupon
     *
     * @return WeFact_Invoice
     */
    public function setCoupon($Coupon)
    {
        $this->Coupon = $Coupon;

        return $this;
    }

    /**
     * Gets the The reference number.
     *
     * @return string
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * Sets the The reference number.
     *
     * @param string $ReferenceNumber the reference number
     *
     * @return WeFact_Invoice
     */
    public function setReferenceNumber($ReferenceNumber)
    {
        $this->ReferenceNumber = $ReferenceNumber;

        return $this;
    }

    /**
     * Gets the The debtors company name.
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets the The debtors company name.
     *
     * @param string $CompanyName the company name
     *
     * @return WeFact_Invoice
     */
    public function setCompanyName($CompanyName)
    {
        $this->CompanyName = $CompanyName;

        return $this;
    }

    /**
     * Gets the The debtors initials.
     *
     * @return string
     */
    public function getInitials()
    {
        return $this->Initials;
    }

    /**
     * Sets the The debtors initials.
     *
     * @param string $Initials the initials
     *
     * @return WeFact_Invoice
     */
    public function setInitials($Initials)
    {
        $this->Initials = $Initials;

        return $this;
    }

    /**
     * Gets the The debtors sex (m or f).
     *
     * @return string
     */
    public function getSex()
    {
        return $this->Sex;
    }

    /**
     * Sets the The debtors sex (m or f).
     *
     * @param string $Sex the sex
     *
     * @return WeFact_Invoice
     */
    public function setSex($Sex)
    {
        $this->Sex = $Sex;

        return $this;
    }

    /**
     * Gets the The debtors surname.
     *
     * @return string
     */
    public function getSurName()
    {
        return $this->SurName;
    }

    /**
     * Sets the The debtors surname.
     *
     * @param string $SurName the sur name
     *
     * @return WeFact_Invoice
     */
    public function setSurName($SurName)
    {
        $this->SurName = $SurName;

        return $this;
    }

    /**
     * Gets the The debtors address.
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->Address;
    }

    /**
     * Sets the The debtors address.
     *
     * @param string $Address the address
     *
     * @return WeFact_Invoice
     */
    public function setAddress($Address)
    {
        $this->Address = $Address;

        return $this;
    }

    /**
     * Gets the The debtors zipcode.
     *
     * @return string
     */
    public function getZipCode()
    {
        return $this->ZipCode;
    }

    /**
     * Sets the The debtors zipcode.
     *
     * @param string $ZipCode the zip code
     *
     * @return WeFact_Invoice
     */
    public function setZipCode($ZipCode)
    {
        $this->ZipCode = $ZipCode;

        return $this;
    }

    /**
     * Gets the The debtors city.
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the The debtors city.
     *
     * @param string $City the city
     *
     * @return WeFact_Invoice
     */
    public function setCity($City)
    {
        $this->City = $City;

        return $this;
    }

    /**
     * Gets the The debtors country (ISO_3166-1).
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Sets the The debtors country (ISO_3166-1).
     *
     * @param string $Country the country
     *
     * @return WeFact_Invoice
     */
    public function setCountry($Country)
    {
        $this->Country = $Country;

        return $this;
    }

    /**
     * Gets the The debtors email address.
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->EmailAddress;
    }

    /**
     * Sets the The debtors email address.
     *
     * @param string $EmailAddress the email address
     *
     * @return WeFact_Invoice
     */
    public function setEmailAddress($EmailAddress)
    {
        $this->EmailAddress = $EmailAddress;

        return $this;
    }

    /**
     * Gets the The invoice method
     *
     * @return int
     */
    public function getInvoiceMethod()
    {
        return $this->InvoiceMethod;
    }

    /**
     * Sets the The invoice method
     *   0 = by email
     *   1 = by mail
     *   3 = by post and mail.
     *
     * @param int $InvoiceMethod the invoice method
     *
     * @return WeFact_Invoice
     */
    public function setInvoiceMethod($InvoiceMethod)
    {
        $this->InvoiceMethod = $InvoiceMethod;

        return $this;
    }

    /**
     * @return int
     */
    public function getTemplate()
    {
        return $this->Template;
    }

    /**
     *  Invoice template ID. Default: debtor settings
     *
     * @param int $Template
     */
    public function setTemplate($Template)
    {
        $this->Template = $Template;
    }

    /**
     * Gets the The sent date of the invoice.
     *
     * @return string
     */
    public function getSentDate()
    {
        return $this->SentDate;
    }

    /**
     * Sets the The sent date of the invoice.
     *
     * @param string $SentDate the sent date
     *
     * @return WeFact_Invoice
     */
    public function setSentDate($SentDate)
    {
        $this->SentDate = $SentDate;

        return $this;
    }

    /**
     * Gets the The amount of times the invoice has been sent.
     *
     * @return int
     */
    public function getSent()
    {
        return $this->Sent;
    }

    /**
     * Sets the The amount of times the invoice has been sent.
     *
     * @param int $Sent the sent
     *
     * @return WeFact_Invoice
     */
    public function setSent($Sent)
    {
        $this->Sent = $Sent;

        return $this;
    }

    /**
     * Gets the The amount of reminders that have been sent.
     *
     * @return int
     */
    public function getReminders()
    {
        return $this->Reminders;
    }

    /**
     * Sets the The amount of reminders that have been sent.
     *
     * @param int $Reminders the reminders
     *
     * @return WeFact_Invoice
     */
    public function setReminders($Reminders)
    {
        $this->Reminders = $Reminders;

        return $this;
    }

    /**
     * Gets the The date of the last sent reminder.
     *
     * @return string
     */
    public function getReminderDate()
    {
        return $this->ReminderDate;
    }

    /**
     * Sets the The date of the last sent reminder.
     *
     * @param string $ReminderDate the reminder date
     *
     * @return WeFact_Invoice
     */
    public function setReminderDate($ReminderDate)
    {
        $this->ReminderDate = $ReminderDate;

        return $this;
    }

    /**
     * Gets the The amount of summations that have been sent.
     *
     * @return int
     */
    public function getSummations()
    {
        return $this->Summations;
    }

    /**
     * Sets the The amount of summations that have been sent.
     *
     * @param int $Summations the summations
     *
     * @return WeFact_Invoice
     */
    public function setSummations($Summations)
    {
        $this->Summations = $Summations;

        return $this;
    }

    /**
     * Gets the The date of the last sent summation.
     *
     * @return string
     */
    public function getSummationDate()
    {
        return $this->SummationDate;
    }

    /**
     * Sets the The date of the last sent summation.
     *
     * @param string $SummationDate the summation date
     *
     * @return WeFact_Invoice
     */
    public function setSummationDate($SummationDate)
    {
        $this->SummationDate = $SummationDate;

        return $this;
    }

    /**
     * Gets the Authorization for direct debit
     *
     * @return string
     */
    public function getAuthorisation()
    {
        return $this->Authorisation;
    }

    /**
     * Sets the Authorization for direct debit
     * This can either be 'yes' or 'no' by default it will be the debtors
     * preference.
     *
     * @param string $Authorisation the authorisation
     *
     * @return WeFact_Invoice
     */
    public function setAuthorisation($Authorisation)
    {
        $this->Authorisation = $Authorisation;

        return $this;
    }

    /**
     * Gets the The payment method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->PaymentMethod;
    }

    /**
     * Sets the The payment method
     * Can be 'wire', 'auth', 'paypal', 'ideal' or 'other'.
     *
     * @param string $PaymentMethod the payment method
     *
     * @return WeFact_Invoice
     */
    public function setPaymentMethod($PaymentMethod)
    {
        $this->PaymentMethod = $PaymentMethod;

        return $this;
    }

    /**
     * Gets the The date the payment was made.
     *
     * @return string
     */
    public function getPayDate()
    {
        return $this->PayDate;
    }

    /**
     * Sets the The date the payment was made.
     *
     * @param string $PayDate the pay date
     *
     * @return WeFact_Invoice
     */
    public function setPayDate($PayDate)
    {
        $this->PayDate = $PayDate;

        return $this;
    }

    /**
     * Gets the The transaction id of the (online) payment.
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->TransactionID;
    }

    /**
     * Sets the The transaction id of the (online) payment.
     *
     * @param string $TransactionID the transaction id
     *
     * @return WeFact_Invoice
     */
    public function setTransactionID($TransactionID)
    {
        $this->TransactionID = $TransactionID;

        return $this;
    }

    /**
     * Gets the The description of the invoice.
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->Description;
    }

    /**
     * Sets the The description of the invoice.
     *
     * @param string $Description the description
     *
     * @return WeFact_Invoice
     */
    public function setDescription($Description)
    {
        $this->Description = $Description;

        return $this;
    }

    /**
     * Gets the The internal comments associated with the invoice.
     *
     * @return string
     */
    public function getComment()
    {
        return $this->Comment;
    }

    /**
     * Sets the The internal comments associated with the invoice.
     *
     * @param string $Comment the comment
     *
     * @return WeFact_Invoice
     */
    public function setComment($Comment)
    {
        $this->Comment = $Comment;

        return $this;
    }

    /**
     * Gets the value of InvoiceLines.
     *
     * @return WeFact_InvoiceLine[]
     */
    public function getInvoiceLines()
    {
        $return = array();

        foreach ($this->InvoiceLines as $invoiceLineArray) {
            $invoiceLine = new WeFact_InvoiceLine();
            foreach ($invoiceLineArray as $key => $value) {
                $invoiceLine->$key = $value;
            }
            $return[] = $invoiceLine;
        }

        return $return;
    }

    /**
     * Sets the value of InvoiceLines.
     *
     * @param WeFact_InvoiceLine[] $invoiceLines the invoice lines
     *
     * @return WeFact_Invoice
     */
    public function setInvoiceLines(array $invoiceLines)
    {
        $this->InvoiceLines = array();
        foreach ($invoiceLines as $invoiceLine) {
            $this->addInvoiceLine($invoiceLine);
        }
        return $this;
    }

    /**
     * Adds an instance of WeFact_InvoiceLine.
     *
     * @param WeFact_InvoiceLine $InvoiceLine the invoice line
     *
     * @return WeFact_Invoice
     */
    public function addInvoiceLine(WeFact_InvoiceLine $InvoiceLine)
    {
        $array = get_object_vars($InvoiceLine);
        array_push($this->InvoiceLines, $array);

        return $this;
    }

    /**
     * Remove an instance of WeFact_InvoiceLine.
     *
     * @param WeFact_InvoiceLine $removedInvoiceLine the  invoice line
     *
     * @return WeFact_Invoice
     */
    public function deleteInvoiceLine(WeFact_InvoiceLine $removedInvoiceLine)
    {
        if ($removedInvoiceLine->getIdentifier() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceLine Identifier must be defined!')
            );
        }

        $invoiceLines = array();
        foreach ($this->getInvoiceLines() as $invoiceLine) {
            if ($removedInvoiceLine->getIdentifier() != $invoiceLine->getIdentifier()) {
                $invoiceLines[] = $invoiceLine;
            }
        }
        $this->setInvoiceLines($invoiceLines);

        return $this;
    }


    /**
     * Check if there are any errors in the model data
     */
    public function checkForErrors()
    {
        if ($this->getDebtorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('DebtorCode must be defined!')
            );
        }

        $InvoiceLines = $this->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one WeFact_InvoiceLine object in the InvoiceLines array!')
            );
        }
    }

    /**
     * get all the invoices by DebtorCode
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @param $debtorCode
     * @return WeFact_Invoice[]
     */
    public static function getByDebtorCode($debtorCode)
    {
        $api        = new WeFact_Api();
        $parameters = array(
            'searchat'  => 'DebtorCode',
            'searchfor' => $debtorCode
        );
        $response   = $api->sendRequest('invoice', 'list', $parameters);
        $result     = array();

        if (isset($response['invoices'])) {
            foreach ($response['invoices'] as $invoiceArray) {
                $invoice = new self();
                foreach ($invoiceArray as $field => $value) {
                    $invoice->$field = $value;
                }
                $result[] = $invoice;
            }
        }
        return $result;
    }

    /**
     * Credits this invoice
     *
     * @return array
     */
    public function credit()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'credit', $parameters);
    }


    /**
     * Downloads this invoice in a base64 encoded string
     *
     * @return array
     */
    public function downloadInvoice()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'download', $parameters);
    }

    /**
     * Marks this invoice as paid
     *
     * @return array
     */
    public function markAsPaid()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'markaspaid', $parameters);
    }

    /**
     * Marks this invoice as unpaid
     *
     * @return array
     */
    public function markAsUnpaid()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'markasunpaid', $parameters);
    }

    /**
     * Add a partly payment to this invoice
     *
     * @throws Exception
     * @return array
     */
    public function partPayment()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($this->getAmountPaid() == '') {
            throw new \InvalidArgumentException(
                sprintf('AmountPaid must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'partpayment', $parameters);
    }

    /**
     * Send an invoice by email
     *
     * @return array
     */
    public function sendInvoiceByEmail()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'sendbyemail', $parameters);
    }

    /**
     * Send an invoice reminder by email
     *
     * @return array
     */
    public function sendInvoiceReminderByEmail()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'sendreminderbyemail', $parameters);
    }

    /**
     * Send an invoice summation by email
     *
     * @return array
     */
    public function sendInvoiceSummationByEmail()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('invoice', 'sendsummationbyemail', $parameters);
    }


    /**
     * Adds a invoice line to an EXISTING invoice
     *
     * @param  WeFact_InvoiceLine $invoiceLine
     * @throws Exception
     * @return array
     */
    public function insertInvoiceLine(WeFact_InvoiceLine $invoiceLine)
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        $invoiceLineParameters = get_object_vars($invoiceLine);
        $parameters            = array(
            'InvoiceCode'  => $this->getInvoiceCode(),
            'InvoiceLines' => array(
                $invoiceLineParameters
            )
        );

        $response = $this->sendRequest('invoiceline', 'add', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to add InvoiceLine: ' . print_r($response['errors'], true));
        }
        // on success also add the InvoiceLine to the current object
        $this->addInvoiceLine($invoiceLine);

        return $response;
    }

    /**
     * Deletes an invoice line from an EXISTING invoice
     *
     * @param  WeFact_InvoiceLine $invoiceLine
     * @throws Exception
     * @return array
     */
    public function removeInvoiceLine(WeFact_InvoiceLine $invoiceLine)
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($invoiceLine->getIdentifier() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceLine Identifier must be defined!')
            );
        }

        $parameters = array(
            'InvoiceCode'  => $this->getInvoiceCode(),
            'InvoiceLines' => array(
                'Identifier' => $invoiceLine->getIdentifier()
            )
        );

        $response = $this->sendRequest('invoiceline', 'delete', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to add InvoiceLine: ' . print_r($response['errors'], true));
        }

        $this->deleteInvoiceLine($invoiceLine);

        return $response;
    }

    /**
     * Pause the payment process
     * can only be used on invoices with status Send or PartialPaid
     *
     * @return array
     */
    public function paymentProcessPause()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }
        if ($this->getSubStatus() != '2' && $this->getSubStatus() != '3') {
            throw new \InvalidArgumentException(
                sprintf('PaymentProcess can only be paused for Send or Partial Paid invoices!')
            );
        }

        $parameters = array(
            'InvoiceCode' => $this->getInvoiceCode()
        );
        return $this->sendRequest('invoice', 'paymentprocesspause', $parameters);
    }

    /**
     * Reactivate the payment process
     * can only be used on invoices with status Paused
     *
     * @return array
     */
    public function paymentProcessReactivate()
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }
        if ($this->getSubStatus() != '1') {
            throw new \InvalidArgumentException(
                sprintf('PaymentProcess can only be resumed on invoices with status PAUSED!')
            );
        }

        $parameters = array(
            'InvoiceCode' => $this->getInvoiceCode()
        );
        return $this->sendRequest('invoice', 'paymentprocessreactivate', $parameters);
    }

    /**
     * Add attachment to invoice
     *
     * @param string $fileName
     * @param string $base64File
     * @throws Exception
     * @return array
     */
    public function addAttachment($fileName, $base64File)
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($fileName == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Filename must be defined')
            );
        }

        if ($base64File == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Base64 must be defined')
            );
        }

        $parameters = array(
            'InvoiceCode' => $this->getInvoiceCode(),
            'Type'        => 'invoice',
            'Filename'    => $fileName,
            'Base64'      => $base64File,
        );
        return $this->sendRequest('attachment', 'add', $parameters);
    }

    /**
     * Deletes a attachment from a invoice
     *
     * @param $fileName
     * @throws Exception
     * @return array
     */
    public function deleteAttachment($fileName)
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($fileName == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Filename must be defined')
            );
        }

        $parameters = array(
            'InvoiceCode' => $this->getInvoiceCode(),
            'Type'        => 'invoice',
            'Filename'    => $fileName,
        );
        return $this->sendRequest('attachment', 'delete', $parameters);
    }

    /**
     * Downloads a attachment from a invoice
     *
     * @param string $fileName
     * @throws Exception
     * @return string Base64 Encoded Document
     */
    public function downloadAttachment($fileName)
    {
        if ($this->getInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('InvoiceCode must be defined!')
            );
        }

        if ($fileName == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Filename must be defined')
            );
        }

        $parameters = array(
            'InvoiceCode' => $this->getInvoiceCode(),
            'Type'        => 'invoice',
            'Filename'    => $fileName,
        );

        $response = $this->sendRequest('attachment', 'download', $parameters);

        if (isset($response['success'][1])) {
            return $response['success'][1];
        }
        return '';
    }


}
