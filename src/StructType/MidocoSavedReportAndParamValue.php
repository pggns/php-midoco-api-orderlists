<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for MidocoSavedReportAndParamValue StructType
 * @subpackage Structs
 */
class MidocoSavedReportAndParamValue extends AbstractStructBase
{
    /**
     * The MidocoJasperReportParamValue
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - ref: MidocoJasperReportParamValue
     * @var \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO[]
     */
    protected array $MidocoJasperReportParamValue = [];
    /**
     * The MidocoSavedReport
     * Meta information extracted from the WSDL
     * - ref: MidocoSavedReport
     * @var \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport $MidocoSavedReport = null;
    /**
     * Constructor method for MidocoSavedReportAndParamValue
     * @uses MidocoSavedReportAndParamValue::setMidocoJasperReportParamValue()
     * @uses MidocoSavedReportAndParamValue::setMidocoSavedReport()
     * @param \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport $midocoSavedReport
     */
    public function __construct(array $midocoJasperReportParamValue = [], ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport $midocoSavedReport = null)
    {
        $this
            ->setMidocoJasperReportParamValue($midocoJasperReportParamValue)
            ->setMidocoSavedReport($midocoSavedReport);
    }
    /**
     * Get MidocoJasperReportParamValue value
     * @return \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO[]
     */
    public function getMidocoJasperReportParamValue(): array
    {
        return $this->MidocoJasperReportParamValue;
    }
    /**
     * This method is responsible for validating the values passed to the setMidocoJasperReportParamValue method
     * This method is willingly generated in order to preserve the one-line inline validation within the setMidocoJasperReportParamValue method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue(array $values = []): string
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) {
            // validation for constraint: itemType
            if (!$midocoSavedReportAndParamValueMidocoJasperReportParamValueItem instanceof \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO) {
                $invalidValues[] = is_object($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) ? get_class($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem) : sprintf('%s(%s)', gettype($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem), var_export($midocoSavedReportAndParamValueMidocoJasperReportParamValueItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        
        return $message;
    }
    /**
     * Set MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO[] $midocoJasperReportParamValue
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReportAndParamValue
     */
    public function setMidocoJasperReportParamValue(array $midocoJasperReportParamValue = []): self
    {
        // validation for constraint: array
        if ('' !== ($midocoJasperReportParamValueArrayErrorMessage = self::validateMidocoJasperReportParamValueForArrayConstraintsFromSetMidocoJasperReportParamValue($midocoJasperReportParamValue))) {
            throw new InvalidArgumentException($midocoJasperReportParamValueArrayErrorMessage, __LINE__);
        }
        $this->MidocoJasperReportParamValue = $midocoJasperReportParamValue;
        
        return $this;
    }
    /**
     * Add item to MidocoJasperReportParamValue value
     * @throws InvalidArgumentException
     * @param \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO $item
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReportAndParamValue
     */
    public function addToMidocoJasperReportParamValue(\Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO $item): self
    {
        // validation for constraint: itemType
        if (!$item instanceof \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO) {
            throw new InvalidArgumentException(sprintf('The MidocoJasperReportParamValue property can only contain items of type \Pggns\MidocoApi\Orderlists\StructType\JasperReportParamValueDTO, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->MidocoJasperReportParamValue[] = $item;
        
        return $this;
    }
    /**
     * Get MidocoSavedReport value
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport|null
     */
    public function getMidocoSavedReport(): ?\Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport
    {
        return $this->MidocoSavedReport;
    }
    /**
     * Set MidocoSavedReport value
     * @param \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport $midocoSavedReport
     * @return \Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReportAndParamValue
     */
    public function setMidocoSavedReport(?\Pggns\MidocoApi\Orderlists\StructType\MidocoSavedReport $midocoSavedReport = null): self
    {
        $this->MidocoSavedReport = $midocoSavedReport;
        
        return $this;
    }
}
