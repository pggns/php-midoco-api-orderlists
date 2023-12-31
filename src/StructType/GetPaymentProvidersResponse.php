<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPaymentProvidersResponse StructType
 * @subpackage Structs
 */
class GetPaymentProvidersResponse extends AbstractStructBase
{
    /**
     * The MidocoPaymentProvider
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - ref: MidocoPaymentProvider
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider[]
     */
    protected array $MidocoPaymentProvider = [];
    /**
     * Constructor method for GetPaymentProvidersResponse
     * @uses GetPaymentProvidersResponse::setMidocoPaymentProvider()
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider[] $midocoPaymentProvider
     */
    public function __construct(array $midocoPaymentProvider = [])
    {
        $this
            ->setMidocoPaymentProvider($midocoPaymentProvider);
    }
    /**
     * Get MidocoPaymentProvider value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider[]
     */
    public function getMidocoPaymentProvider(): array
    {
        return $this->MidocoPaymentProvider;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoPaymentProvider method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoPaymentProvider method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoPaymentProviderForArrayConstraintsFromSetMidocoPaymentProvider(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $getPaymentProvidersResponseMidocoPaymentProviderItem) {
            // validation for constraint: itemType
            if (!$getPaymentProvidersResponseMidocoPaymentProviderItem instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider) {
                $invalidValues[] = is_object($getPaymentProvidersResponseMidocoPaymentProviderItem) ? get_class($getPaymentProvidersResponseMidocoPaymentProviderItem) : sprintf('%s(%s)', gettype($getPaymentProvidersResponseMidocoPaymentProviderItem), var_export($getPaymentProvidersResponseMidocoPaymentProviderItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoPaymentProvider property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoPaymentProvider value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider[] $midocoPaymentProvider
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPaymentProvidersResponse
     */
    public function setMidocoPaymentProvider(array $midocoPaymentProvider = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoPaymentProviderArrayErrorMessage = self::validateMidocoPaymentProviderForArrayConstraintsFromSetMidocoPaymentProvider($midocoPaymentProvider))) {
            throw new InvalidArgumentException($midocoPaymentProviderArrayErrorMessage, __LINE__);
        }
        $this->MidocoPaymentProvider = $midocoPaymentProvider;
        
        return $this;
    }
    /**
     * Add item to MidocoPaymentProvider value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetPaymentProvidersResponse
     */
    public function addToMidocoPaymentProvider(\Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider) {
            throw new InvalidArgumentException(sprintf('The MidocoPaymentProvider property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\MidocoPaymentProvider, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoPaymentProvider[] = $item;
        
        return $this;
    }
}
