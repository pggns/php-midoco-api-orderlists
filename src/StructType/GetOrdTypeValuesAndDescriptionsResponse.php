<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetOrdTypeValuesAndDescriptionsResponse StructType
 * @subpackage Structs
 */
class GetOrdTypeValuesAndDescriptionsResponse extends AbstractStructBase
{
    /**
     * The MidocoOrdCriteriaType
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaType
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType[]
     */
    protected array $MidocoOrdCriteriaType = [];
    /**
     * The MidocoOrdCriteriaDescriptionCategory
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoOrdCriteriaDescriptionCategory
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory[]
     */
    protected array $MidocoOrdCriteriaDescriptionCategory = [];
    /**
     * The GetOrdTypeValuesAndDescriptionsDTO
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: GetOrdTypeValuesAndDescriptionsDTO
     * @var \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO[]
     */
    protected array $GetOrdTypeValuesAndDescriptionsDTO = [];
    /**
     * Constructor method for GetOrdTypeValuesAndDescriptionsResponse
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setMidocoOrdCriteriaType()
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setMidocoOrdCriteriaDescriptionCategory()
     * @uses GetOrdTypeValuesAndDescriptionsResponse::setGetOrdTypeValuesAndDescriptionsDTO()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory[] $midocoOrdCriteriaDescriptionCategory
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO[] $getOrdTypeValuesAndDescriptionsDTO
     */
    public function __construct(array $midocoOrdCriteriaType = [], array $midocoOrdCriteriaDescriptionCategory = [], array $getOrdTypeValuesAndDescriptionsDTO = [])
    {
        $this
            ->setMidocoOrdCriteriaType($midocoOrdCriteriaType)
            ->setMidocoOrdCriteriaDescriptionCategory($midocoOrdCriteriaDescriptionCategory)
            ->setGetOrdTypeValuesAndDescriptionsDTO($getOrdTypeValuesAndDescriptionsDTO);
    }
    /**
     * Get MidocoOrdCriteriaType value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType[]
     */
    public function getMidocoOrdCriteriaType(): array
    {
        return $this->MidocoOrdCriteriaType;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaType method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaType method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaTypeForArrayConstraintsFromSetMidocoOrdCriteriaType(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem), var_export($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaTypeItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType[] $midocoOrdCriteriaType
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setMidocoOrdCriteriaType(array $midocoOrdCriteriaType = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaTypeArrayErrorMessage = self::validateMidocoOrdCriteriaTypeForArrayConstraintsFromSetMidocoOrdCriteriaType($midocoOrdCriteriaType))) {
            throw new InvalidArgumentException($midocoOrdCriteriaTypeArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaType = $midocoOrdCriteriaType;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaType value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaType(\Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaType property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaType, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaType[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoOrdCriteriaDescriptionCategory value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory[]
     */
    public function getMidocoOrdCriteriaDescriptionCategory(): array
    {
        return $this->MidocoOrdCriteriaDescriptionCategory;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoOrdCriteriaDescriptionCategory method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoOrdCriteriaDescriptionCategory method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoOrdCriteriaDescriptionCategoryForArrayConstraintsFromSetMidocoOrdCriteriaDescriptionCategory(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem), var_export($getOrdTypeValuesAndDescriptionsResponseMidocoOrdCriteriaDescriptionCategoryItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoOrdCriteriaDescriptionCategory property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoOrdCriteriaDescriptionCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory[] $midocoOrdCriteriaDescriptionCategory
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setMidocoOrdCriteriaDescriptionCategory(array $midocoOrdCriteriaDescriptionCategory = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoOrdCriteriaDescriptionCategoryArrayErrorMessage = self::validateMidocoOrdCriteriaDescriptionCategoryForArrayConstraintsFromSetMidocoOrdCriteriaDescriptionCategory($midocoOrdCriteriaDescriptionCategory))) {
            throw new InvalidArgumentException($midocoOrdCriteriaDescriptionCategoryArrayErrorMessage, __LINE__);
        }
        $this->MidocoOrdCriteriaDescriptionCategory = $midocoOrdCriteriaDescriptionCategory;
        
        return $this;
    }
    /**
     * Add item to MidocoOrdCriteriaDescriptionCategory value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToMidocoOrdCriteriaDescriptionCategory(\Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory) {
            throw new InvalidArgumentException(sprintf('The MidocoOrdCriteriaDescriptionCategory property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoOrdCriteriaDescriptionCategory, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoOrdCriteriaDescriptionCategory[] = $item;
        
        return $this;
    }
    /**
     * Get GetOrdTypeValuesAndDescriptionsDTO value
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO[]
     */
    public function getGetOrdTypeValuesAndDescriptionsDTO(): array
    {
        return $this->GetOrdTypeValuesAndDescriptionsDTO;
    }
    /**
     * This method is responsible for validating the values passed to the setGetOrdTypeValuesAndDescriptionsDTO method
     * This method is willingly generated in order to preserve the one-line inline validation within the setGetOrdTypeValuesAndDescriptionsDTO method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateGetOrdTypeValuesAndDescriptionsDTOForArrayConstraintsFromSetGetOrdTypeValuesAndDescriptionsDTO(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) {
            // validation for constraint: itemType
            if (!$getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem instanceof \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO) {
                $invalidValues[] = is_object($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) ? get_class($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem) : sprintf('%s(%s)', gettype($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem), var_export($getOrdTypeValuesAndDescriptionsResponseGetOrdTypeValuesAndDescriptionsDTOItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The GetOrdTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set GetOrdTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO[] $getOrdTypeValuesAndDescriptionsDTO
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function setGetOrdTypeValuesAndDescriptionsDTO(array $getOrdTypeValuesAndDescriptionsDTO = []): self
    {
        // validation for constraint: array
        if ('' !== ($getOrdTypeValuesAndDescriptionsDTOArrayErrorMessage = self::validateGetOrdTypeValuesAndDescriptionsDTOForArrayConstraintsFromSetGetOrdTypeValuesAndDescriptionsDTO($getOrdTypeValuesAndDescriptionsDTO))) {
            throw new InvalidArgumentException($getOrdTypeValuesAndDescriptionsDTOArrayErrorMessage, __LINE__);
        }
        $this->GetOrdTypeValuesAndDescriptionsDTO = $getOrdTypeValuesAndDescriptionsDTO;
        
        return $this;
    }
    /**
     * Add item to GetOrdTypeValuesAndDescriptionsDTO value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsResponse
     */
    public function addToGetOrdTypeValuesAndDescriptionsDTO(\Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO) {
            throw new InvalidArgumentException(sprintf('The GetOrdTypeValuesAndDescriptionsDTO property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\GetOrdTypeValuesAndDescriptionsDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->GetOrdTypeValuesAndDescriptionsDTO[] = $item;
        
        return $this;
    }
}
