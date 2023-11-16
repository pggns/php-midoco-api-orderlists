<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetMarketingKeysLocalizedForTypeResponse StructType
 * @subpackage Structs
 */
class GetMarketingKeysLocalizedForTypeResponse extends AbstractStructBase
{
    /**
     * The MidocoMarketingKeyLocalized
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKeyLocalized
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized[]
     */
    protected array $MidocoMarketingKeyLocalized = [];
    /**
     * Constructor method for GetMarketingKeysLocalizedForTypeResponse
     * @uses GetMarketingKeysLocalizedForTypeResponse::setMidocoMarketingKeyLocalized()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized[] $midocoMarketingKeyLocalized
     */
    public function __construct(array $midocoMarketingKeyLocalized = [])
    {
        $this
            ->setMidocoMarketingKeyLocalized($midocoMarketingKeyLocalized);
    }
    /**
     * Get MidocoMarketingKeyLocalized value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized[]
     */
    public function getMidocoMarketingKeyLocalized(): array
    {
        return $this->MidocoMarketingKeyLocalized;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarketingKeyLocalized method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKeyLocalized method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyLocalizedForArrayConstraintsFromSetMidocoMarketingKeyLocalized(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) {
            // validation for constraint: itemType
            if (!$getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized) {
                $invalidValues[] = is_object($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) ? get_class($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem) : sprintf('%s(%s)', gettype($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem), var_export($getMarketingKeysLocalizedForTypeResponseMidocoMarketingKeyLocalizedItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKeyLocalized property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKeyLocalized value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized[] $midocoMarketingKeyLocalized
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMarketingKeysLocalizedForTypeResponse
     */
    public function setMidocoMarketingKeyLocalized(array $midocoMarketingKeyLocalized = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyLocalizedArrayErrorMessage = self::validateMidocoMarketingKeyLocalizedForArrayConstraintsFromSetMidocoMarketingKeyLocalized($midocoMarketingKeyLocalized))) {
            throw new InvalidArgumentException($midocoMarketingKeyLocalizedArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKeyLocalized = $midocoMarketingKeyLocalized;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKeyLocalized value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetMarketingKeysLocalizedForTypeResponse
     */
    public function addToMidocoMarketingKeyLocalized(\Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKeyLocalized property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoMarketingKeyLocalized, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKeyLocalized[] = $item;
        
        return $this;
    }
}