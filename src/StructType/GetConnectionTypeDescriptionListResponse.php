<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetConnectionTypeDescriptionListResponse StructType
 * @subpackage Structs
 */
class GetConnectionTypeDescriptionListResponse extends AbstractStructBase
{
    /**
     * The MidocoConnectionTypeDescription
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoConnectionTypeDescription
     * @var \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO[]
     */
    protected array $MidocoConnectionTypeDescription = [];
    /**
     * Constructor method for GetConnectionTypeDescriptionListResponse
     * @uses GetConnectionTypeDescriptionListResponse::setMidocoConnectionTypeDescription()
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO[] $midocoConnectionTypeDescription
     */
    public function __construct(array $midocoConnectionTypeDescription = [])
    {
        $this
            ->setMidocoConnectionTypeDescription($midocoConnectionTypeDescription);
    }
    /**
     * Get MidocoConnectionTypeDescription value
     * @return \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO[]
     */
    public function getMidocoConnectionTypeDescription(): array
    {
        return $this->MidocoConnectionTypeDescription;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoConnectionTypeDescription method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoConnectionTypeDescription method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoConnectionTypeDescriptionForArrayConstraintsFromSetMidocoConnectionTypeDescription(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem) {
            // validation for constraint: itemType
            if (!$getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem instanceof \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO) {
                $invalidValues[] = is_object($getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem) ? get_class($getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem) : sprintf('%s(%s)', gettype($getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem), var_export($getConnectionTypeDescriptionListResponseMidocoConnectionTypeDescriptionItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoConnectionTypeDescription property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoConnectionTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO[] $midocoConnectionTypeDescription
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetConnectionTypeDescriptionListResponse
     */
    public function setMidocoConnectionTypeDescription(array $midocoConnectionTypeDescription = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoConnectionTypeDescriptionArrayErrorMessage = self::validateMidocoConnectionTypeDescriptionForArrayConstraintsFromSetMidocoConnectionTypeDescription($midocoConnectionTypeDescription))) {
            throw new InvalidArgumentException($midocoConnectionTypeDescriptionArrayErrorMessage, __LINE__);
        }
        $this->MidocoConnectionTypeDescription = $midocoConnectionTypeDescription;
        
        return $this;
    }
    /**
     * Add item to MidocoConnectionTypeDescription value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetConnectionTypeDescriptionListResponse
     */
    public function addToMidocoConnectionTypeDescription(\Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoConnectionTypeDescription property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\ConnectionTypeDescDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoConnectionTypeDescription[] = $item;
        
        return $this;
    }
}
