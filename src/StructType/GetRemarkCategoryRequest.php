<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetRemarkCategoryRequest StructType
 * @subpackage Structs
 */
class GetRemarkCategoryRequest extends AbstractStructBase
{
    /**
     * The MidocoRemarkCategory
     * Meta information extracted from the WSDL
     * - ref: MidocoRemarkCategory
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory $MidocoRemarkCategory = null;
    /**
     * The showParentsOnly
     * @var bool|null
     */
    protected ?bool $showParentsOnly = null;
    /**
     * Constructor method for GetRemarkCategoryRequest
     * @uses GetRemarkCategoryRequest::setMidocoRemarkCategory()
     * @uses GetRemarkCategoryRequest::setShowParentsOnly()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @param bool $showParentsOnly
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory $midocoRemarkCategory = null, ?bool $showParentsOnly = null)
    {
        $this
            ->setMidocoRemarkCategory($midocoRemarkCategory)
            ->setShowParentsOnly($showParentsOnly);
    }
    /**
     * Get MidocoRemarkCategory value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory|null
     */
    public function getMidocoRemarkCategory(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory
    {
        return $this->MidocoRemarkCategory;
    }
    /**
     * Set MidocoRemarkCategory value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory $midocoRemarkCategory
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetRemarkCategoryRequest
     */
    public function setMidocoRemarkCategory(?\Pggns\MidocoApi\Orderlists\StructType\MidocoRemarkCategory $midocoRemarkCategory = null): self
    {
        $this->MidocoRemarkCategory = $midocoRemarkCategory;
        
        return $this;
    }
    /**
     * Get showParentsOnly value
     * @return bool|null
     */
    public function getShowParentsOnly(): ?bool
    {
        return $this->showParentsOnly;
    }
    /**
     * Set showParentsOnly value
     * @param bool $showParentsOnly
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetRemarkCategoryRequest
     */
    public function setShowParentsOnly(?bool $showParentsOnly = null): self
    {
        // validation for constraint: boolean
        if (!is_null($showParentsOnly) && !is_bool($showParentsOnly)) {
            throw new InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($showParentsOnly, true), gettype($showParentsOnly)), __LINE__);
        }
        $this->showParentsOnly = $showParentsOnly;
        
        return $this;
    }
}