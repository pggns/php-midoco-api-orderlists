<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeleteAutoRemarkRequest StructType
 * @subpackage Structs
 */
class DeleteAutoRemarkRequest extends AbstractStructBase
{
    /**
     * The MidocoSupplierAutoRemark
     * Meta information extracted from the WSDL
     * - ref: MidocoSupplierAutoRemark
     * @var \Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO $MidocoSupplierAutoRemark = null;
    /**
     * Constructor method for DeleteAutoRemarkRequest
     * @uses DeleteAutoRemarkRequest::setMidocoSupplierAutoRemark()
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null)
    {
        $this
            ->setMidocoSupplierAutoRemark($midocoSupplierAutoRemark);
    }
    /**
     * Get MidocoSupplierAutoRemark value
     * @return \Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO|null
     */
    public function getMidocoSupplierAutoRemark(): ?\Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO
    {
        return $this->MidocoSupplierAutoRemark;
    }
    /**
     * Set MidocoSupplierAutoRemark value
     * @param \Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark
     * @return \Pggns\MidocoApi\Orderlists\StructType\DeleteAutoRemarkRequest
     */
    public function setMidocoSupplierAutoRemark(?\Pggns\MidocoApi\Orderlists\StructType\SupplierAutoRemarkDTO $midocoSupplierAutoRemark = null): self
    {
        $this->MidocoSupplierAutoRemark = $midocoSupplierAutoRemark;
        
        return $this;
    }
}