<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MarketingKeyType StructType
 * @subpackage Structs
 */
class MarketingKeyType extends MarketingKeyDTO
{
    /**
     * The MidocoMarketingKeyDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoMarketingKeyDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType[]
     */
    protected array $MidocoMarketingKeyDescription = [];
    /**
     * Constructor method for MarketingKeyType
     * @uses MarketingKeyType::setMidocoMarketingKeyDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType[] $midocoMarketingKeyDescription
     */
    public function __construct(array $midocoMarketingKeyDescription = [])
    {
        $this
            ->setMidocoMarketingKeyDescription($midocoMarketingKeyDescription);
    }
    /**
     * Get MidocoMarketingKeyDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType[]
     */
    public function getMidocoMarketingKeyDescription(): array
    {
        return $this->MidocoMarketingKeyDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoMarketingKeyDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoMarketingKeyDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoMarketingKeyDescriptionForArrayConstraintsFromSetMidocoMarketingKeyDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $marketingKeyTypeMidocoMarketingKeyDescriptionItem) {
            // validation for constraint: itemType
            if (!$marketingKeyTypeMidocoMarketingKeyDescriptionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType) {
                $invalidValues[] = is_object($marketingKeyTypeMidocoMarketingKeyDescriptionItem) ? get_class($marketingKeyTypeMidocoMarketingKeyDescriptionItem) : sprintf('%s(%s)', gettype($marketingKeyTypeMidocoMarketingKeyDescriptionItem), var_export($marketingKeyTypeMidocoMarketingKeyDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoMarketingKeyDescription property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoMarketingKeyDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType[] $midocoMarketingKeyDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyType
     */
    public function setMidocoMarketingKeyDescription(array $midocoMarketingKeyDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoMarketingKeyDescriptionArrayErrorMessage = self::validateMidocoMarketingKeyDescriptionForArrayConstraintsFromSetMidocoMarketingKeyDescription($midocoMarketingKeyDescription))) {
            throw new InvalidArgumentException($midocoMarketingKeyDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoMarketingKeyDescription = $midocoMarketingKeyDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoMarketingKeyDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyType
     */
    public function addToMidocoMarketingKeyDescription(\Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType) {
            throw new InvalidArgumentException(sprintf('The MidocoMarketingKeyDescription property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MarketingKeyDescriptionType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoMarketingKeyDescription[] = $item;
        
        return $this;
    }
}
