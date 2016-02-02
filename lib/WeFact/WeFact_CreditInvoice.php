<?php

/**
 * Class WeFact_CreditInvoice
 */
class WeFact_CreditInvoice extends WeFact_Api
{
    /**
     * @var string
     */
    protected $CreditInvoiceCode;

    /**
     * @var string
     */
    protected $InvoiceCode;

    /**
     * @var int
     */
    protected $Creditor;

    /**
     * @var string
     */
    protected $CreditorCode;

    /**
     * @var DateTime
     */
    protected $Date;

    /**
     * @var int
     */
    protected $Term;

    /**
     * @var float
     */
    protected $AmountExcl;

    /**
     * @var float
     */
    protected $AmountIncl;

    /**
     * @var float
     */
    protected $AmountPaid;

    /**
     * @var string
     */
    protected $PayDate;

    /**
     * @var float
     */
    protected $Private;

    /**
     * 0-100
     * @var int
     */
    protected $PrivatePercentage;

    /**
     * @var int
     */
    protected $ReferenceNumber;

    /**
     * @var int
     */
    protected $Status;

    /**
     * @var array
     */
    protected $InvoiceLines = array();

    /**
     * Gets the value of CreditInvoiceCode.
     *
     * @return string
     */
    public function getCreditInvoiceCode()
    {
        return $this->CreditInvoiceCode;
    }

    /**
     * Sets the value of CreditInvoiceCode.
     *
     * @param string $CreditInvoiceCode the credit invoice code
     *
     * @return WeFact_CreditInvoice
     */
    public function setCreditInvoiceCode($CreditInvoiceCode)
    {
        $this->CreditInvoiceCode = $CreditInvoiceCode;

        return $this;
    }

    /**
     * Gets the value of InvoiceCode.
     *
     * @return string
     */
    public function getInvoiceCode()
    {
        return $this->InvoiceCode;
    }

    /**
     * Sets the value of InvoiceCode.
     *
     * @param string $InvoiceCode the invoice code
     *
     * @return WeFact_CreditInvoice
     */
    public function setInvoiceCode($InvoiceCode)
    {
        $this->InvoiceCode = $InvoiceCode;

        return $this;
    }

    /**
     * Gets the value of WeFact_Creditor.
     *
     * @return int
     */
    public function getCreditor()
    {
        return $this->Creditor;
    }

    /**
     * Sets the value of WeFact_Creditor.
     *
     * @param int $Creditor the creditor
     *
     * @return WeFact_CreditInvoice
     */
    public function setCreditor($Creditor)
    {
        $this->Creditor = $Creditor;

        return $this;
    }

    /**
     * Gets the value of CreditorCode.
     *
     * @return string
     */
    public function getCreditorCode()
    {
        return $this->CreditorCode;
    }

    /**
     * Sets the value of CreditorCode.
     *
     * @param string $CreditorCode the creditor code
     *
     * @return WeFact_CreditInvoice
     */
    public function setCreditorCode($CreditorCode)
    {
        $this->CreditorCode = $CreditorCode;

        return $this;
    }

    /**
     * Gets the value of Date.
     *
     * @return string
     */
    public function getDate()
    {
        return $this->Date;
    }

    /**
     * Sets the value of Date.
     *
     * @param string $Date the date
     *
     * @return WeFact_CreditInvoice
     */
    public function setDate($Date)
    {
        $this->Date = $Date;

        return $this;
    }

    /**
     * Gets the value of Term.
     *
     * @return int
     */
    public function getTerm()
    {
        return $this->Term;
    }

    /**
     * Sets the value of Term.
     *
     * @param int $Term the term
     *
     * @return WeFact_CreditInvoice
     */
    public function setTerm($Term)
    {
        $this->Term = $Term;

        return $this;
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
    public function getAmountIncl()
    {
        return $this->AmountIncl;
    }

    /**
     * Gets the value of AmountPaid.
     *
     * @return float
     */
    public function getAmountPaid()
    {
        return $this->AmountPaid;
    }

    /**
     * Sets the value of AmountPaid.
     *
     * @param float $AmountPaid the amount paid
     *
     * @return WeFact_CreditInvoice
     */
    public function setAmountPaid($AmountPaid)
    {
        $this->AmountPaid = $AmountPaid;

        return $this;
    }

    /**
     * Gets the value of PayDate.
     *
     * @return string
     */
    public function getPayDate()
    {
        return $this->PayDate;
    }

    /**
     * Sets the value of PayDate.
     *
     * @param string $PayDate the pay date
     *
     * @return WeFact_CreditInvoice
     */
    public function setPayDate($PayDate)
    {
        $this->PayDate = $PayDate;

        return $this;
    }

    /**
     * @return float
     */
    public function getPrivate()
    {
        return $this->Private;
    }

    /**
     * @param float $Private
     */
    public function setPrivate($Private)
    {
        $this->Private = $Private;
    }

    /**
     * @return int
     */
    public function getPrivatePercentage()
    {
        return $this->PrivatePercentage;
    }

    /**
     * @param int $PrivatePercentage
     */
    public function setPrivatePercentage($PrivatePercentage)
    {
        $this->PrivatePercentage = $PrivatePercentage;
    }

    /**
     * @return int
     */
    public function getReferenceNumber()
    {
        return $this->ReferenceNumber;
    }

    /**
     * Gets the value of Status.
     *
     * @return int
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     * Sets the value of Status.
     *
     * @param int $Status the status
     *
     * @return WeFact_CreditInvoice
     */
    public function setStatus($Status)
    {
        $this->Status = $Status;

        return $this;
    }

    /**
     * Gets the value of InvoiceLines.
     *
     * @return WeFact_CreditInvoiceLine[]
     */
    public function getInvoiceLines()
    {
        $return = array();

        foreach ($this->InvoiceLines as $invoiceLineArray) {
            $creditInvoiceLine = new WeFact_CreditInvoiceLine();
            foreach ($invoiceLineArray as $key => $value) {
                $creditInvoiceLine->$key = $value;
            }
            $return[] = $creditInvoiceLine;
        }

        return $return;
    }

    /**
     * Sets the value of InvoiceLines.
     *
     * @param WeFact_CreditInvoiceLine[] $invoiceLines the invoice lines
     *
     * @return WeFact_CreditInvoice
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
     * Adds an instance of WeFact_CreditInvoiceLine.
     *
     * @param WeFact_CreditInvoiceLine $InvoiceLine the credit invoice lines
     *
     * @return WeFact_CreditInvoice
     */
    public function addInvoiceLine(WeFact_CreditInvoiceLine $InvoiceLine)
    {
        $array = get_object_vars($InvoiceLine);
        array_push($this->InvoiceLines, $array);

        return $this;
    }

    /**
     * Remove an instance of WeFact_CreditInvoiceLine.
     *
     * @param WeFact_CreditInvoiceLine $creditInvoiceLine the credit invoice line
     *
     * @return WeFact_CreditInvoice
     */
    public function deleteInvoiceLine(WeFact_CreditInvoiceLine $creditInvoiceLine)
    {
        if ($creditInvoiceLine->getIdentifier() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceLine Identifier must be defined!')
            );
        }

        $invoiceLines = array();
        foreach ($this->getInvoiceLines() as $invoiceLine) {
            if ($creditInvoiceLine->getIdentifier() != $invoiceLine->getIdentifier()) {
                $invoiceLines[] = $invoiceLine;
            }
        }
        $this->setInvoiceLines($invoiceLines);

        return $this;
    }


    /**
     * Creates a WeFact_CreditInvoice
     *
     * @return array
     */
    protected function insert()
    {
        if ($this->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $InvoiceLines = $this->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLines object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('creditinvoice', 'add', $parameters);
    }

    /**
     * Edit a CreditInvoice
     *
     * @return array
     */
    protected function update()
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($this->getCreditorCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditorCode must be defined!')
            );
        }

        $InvoiceLines = $this->getInvoiceLines();
        if (empty($InvoiceLines)) {
            throw new \InvalidArgumentException(
                sprintf('There must be at least one InvoiceLines object in the InvoiceLines array!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('creditinvoice', 'edit', $parameters);
    }

    /**
     * Save a CreditInvoice (insert or update)
     *
     * @throws Exception
     * @return array
     */
    public function save()
    {
        // Check if update or insert
        if ($this->getCreditInvoiceCode() == '') {
            $response = $this->insert();
        } else {
            $response = $this->update();
        }

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to save WeFact_CreditInvoice: ' . print_r($response['errors'],true) );
        }
        return $response;
    }


    /**
     * Delete a credit Invoice
     *
     * @throws Exception
     * @return array
     */
    public function remove()
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = array(
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
        );
        $response = $this->sendRequest('creditinvoice', 'delete', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            Throw new Exception('Unable to remove WeFact_CreditInvoice: ' . print_r($response['errors'],true) );
        }
    }

    /**
     * Adds a invoice line to an EXISTING credit invoice
     *
     * @param  WeFact_CreditInvoiceLine $creditInvoiceLine
     * @return  array
     */
    public function insertCreditInvoiceLine(WeFact_CreditInvoiceLine $creditInvoiceLine)
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $invoiceLineParameters = get_object_vars($creditInvoiceLine);
        $parameters            = array(
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
            'InvoiceLines'      => array(
                $invoiceLineParameters
            )
        );

        $response = $this->sendRequest('creditinvoiceline', 'add', $parameters);

        // on success also add the CreditInvoiceLine to the current object
        $this->addInvoiceLine($creditInvoiceLine);

        return $response;
    }

    /**
     * Deletes an invoice line from an EXISTING credit invoice
     *
     * @param  WeFact_CreditInvoiceLine $creditInvoiceLine
     * @return array
     */
    public function removeCreditInvoiceLine(WeFact_CreditInvoiceLine $creditInvoiceLine)
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($creditInvoiceLine->getIdentifier() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceLine Identifier must be defined!')
            );
        }

        $parameters            = array(
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
            'InvoiceLines'      => array(
                'Identifier' => $creditInvoiceLine->getIdentifier()
            )
        );

        $response = $this->sendRequest('creditinvoiceline', 'delete', $parameters);

        $this->deleteInvoiceLine($creditInvoiceLine);

        return $response;
    }

    /**
     * Get all Credit Invoices
     * NOTE: information returned by this ApiCall is just a fraction of the object information
     *
     * @return WeFact_CreditInvoice[]
     */
    public static function listAll()
    {
        $api        = new WeFact_Api();
        $parameters = array();
        $response   = $api->sendRequest('creditinvoice', 'list', $parameters);
        $result     = array();

        if (isset($response['creditinvoices'])) {
            foreach ($response['creditinvoices'] as $creditInvoiceArray) {
                $creditInvoice = new self();
                foreach ($creditInvoiceArray as $field => $value) {
                    $creditInvoice->$field = $value;
                }
                $result[] = $creditInvoice;
            }
        }
        return $result;
    }


    /**
     * get the creditInvoice info by Code
     *
     * @param  int $creditInvoiceCode
     * @return WeFact_CreditInvoice
     */
    public static function getByCode($creditInvoiceCode)
    {
        $api = new WeFact_Api();
        if ($creditInvoiceCode == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }
        $parameters    = array('CreditInvoiceCode' => $creditInvoiceCode);
        $response      = $api->sendRequest('creditinvoice', 'show', $parameters);

        if (!isset($response['status']) || $response['status'] == 'error') {
            return null;
        }

        $creditInvoice = new self();

        if (isset($response['creditinvoice'])) {
            foreach ($response['creditinvoice'] as $field => $value) {
                $creditInvoice->$field = $value;
            }
        }
        return $creditInvoice;
    }


    /**
     * Renew the variable information in this object from the WeFactApi
     *
     * @throws Exception
     * @return WeFact_CreditInvoice
     */
    public function renew()
    {
        $newObject = $this->getByCode($this->getCreditInvoiceCode());

        if ($newObject == null) {
            Throw new Exception("WeFact_CreditInvoice[Code={$this->getCreditInvoiceCode()}] does not exists in WeFact");
        }

        $newInformation = get_object_vars($newObject);
        foreach ($newInformation as $key => $value) {
            $this->$key = $value;
        }
        return $this;
    }

    /**
     * Marks this credit invoice as paid
     *
     * @return array
     */
    public function markAsPaid()
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('creditinvoice', 'markaspaid', $parameters);
    }

    /**
     * Add a partly payment to this credit invoice
     *
     * @return array
     */
    public function partPayment()
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($this->getAmountPaid() == '') {
            throw new \InvalidArgumentException(
                sprintf('AmountPaid must be defined!')
            );
        }

        $parameters = get_object_vars($this);
        return $this->sendRequest('creditinvoice', 'partpayment', $parameters);
    }


    /**
     * Add attachment to credit invoice
     *
     * @param string $fileName
     * @param string $base64File
     * @throws Exception
     * @return array
     */
    public function addAttachment($fileName, $base64File)
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
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
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
            'Type'        => 'creditinvoice',
            'Filename'    => $fileName,
            'Base64'      => $base64File,
        );
        return $this->sendRequest('attachment', 'add', $parameters);
    }

    /**
     * Deletes a attachment from a credit invoice
     *
     * @param $fileName
     * @throws Exception
     * @return array
     */
    public function deleteAttachment($fileName)
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($fileName == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Filename must be defined')
            );
        }

        $parameters = array(
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
            'Type'        => 'creditinvoice',
            'Filename'    => $fileName,
        );
        return $this->sendRequest('attachment', 'delete', $parameters);
    }

    /**
     * Downloads a attachment from a credit invoice
     *
     * @param string $fileName
     * @throws Exception
     * @return string Base64 Encoded Document
     */
    public function downloadAttachment($fileName)
    {
        if ($this->getCreditInvoiceCode() == '') {
            throw new \InvalidArgumentException(
                sprintf('CreditInvoiceCode must be defined!')
            );
        }

        if ($fileName == '') {
            throw new \InvalidArgumentException(
                sprintf('Attachment Filename must be defined')
            );
        }

        $parameters = array(
            'CreditInvoiceCode' => $this->getCreditInvoiceCode(),
            'Type'        => 'creditinvoice',
            'Filename'    => $fileName,
        );

        $response = $this->sendRequest('attachment', 'download', $parameters);

        if (isset($response['success'][1])) {
            return $response['success'][1];
        }
        return '';
    }

}
