<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetAvailableSupplierResponse StructType
 * @subpackage Structs
 */
class GetAvailableSupplierResponse extends AbstractStructBase
{
    /**
     * The MidocoSupplier
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoSupplier
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType[]
     */
    protected array $MidocoSupplier = [];
    /**
     * Constructor method for GetAvailableSupplierResponse
     * @uses GetAvailableSupplierResponse::setMidocoSupplier()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType[] $midocoSupplier
     */
    public function __construct(array $midocoSupplier = [])
    {
        $this
            ->setMidocoSupplier($midocoSupplier);
    }
    /**
     * Get MidocoSupplier value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType[]
     */
    public function getMidocoSupplier(): array
    {
        return $this->MidocoSupplier;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoSupplier method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoSupplier method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoSupplierForArrayConstraintsFromSetMidocoSupplier(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getAvailableSupplierResponseMidocoSupplierItem) {
            // validation for constraint: itemType
            if (!$getAvailableSupplierResponseMidocoSupplierItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType) {
                $invalidValues[] = is_object($getAvailableSupplierResponseMidocoSupplierItem) ? get_class($getAvailableSupplierResponseMidocoSupplierItem) : sprintf('%s(%s)', gettype($getAvailableSupplierResponseMidocoSupplierItem), var_export($getAvailableSupplierResponseMidocoSupplierItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType[] $midocoSupplier
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierResponse
     */
    public function setMidocoSupplier(array $midocoSupplier = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoSupplierArrayErrorMessage = self::validateMidocoSupplierForArrayConstraintsFromSetMidocoSupplier($midocoSupplier))) {
            throw new InvalidArgumentException($midocoSupplierArrayErrorMessage, __LINE__);
        }
        $this->MidocoSupplier = $midocoSupplier;
        
        return $this;
    }
    /**
     * Add item to MidocoSupplier value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetAvailableSupplierResponse
     */
    public function addToMidocoSupplier(\Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType) {
            throw new InvalidArgumentException(sprintf('The MidocoSupplier property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoSupplierType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoSupplier[] = $item;
        
        return $this;
    }
}
