<?php

declare(strict_types=1);

namespace Pggns\MidocoApi\Orderlists\StructType;

use InvalidArgumentException;
use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDunningLettersRequest StructType
 * @subpackage Structs
 */
class GetDunningLettersRequest extends AbstractStructBase
{
    /**
     * The MidocoDunningLetter
     * Meta information extracted from the WSDL
     * - ref: MidocoDunningLetter
     * @var \Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO|null
     */
    protected ?\Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO $MidocoDunningLetter = null;
    /**
     * Constructor method for GetDunningLettersRequest
     * @uses GetDunningLettersRequest::setMidocoDunningLetter()
     * @param \Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO $midocoDunningLetter
     */
    public function __construct(?\Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO $midocoDunningLetter = null)
    {
        $this
            ->setMidocoDunningLetter($midocoDunningLetter);
    }
    /**
     * Get MidocoDunningLetter value
     * @return \Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO|null
     */
    public function getMidocoDunningLetter(): ?\Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO
    {
        return $this->MidocoDunningLetter;
    }
    /**
     * Set MidocoDunningLetter value
     * @param \Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO $midocoDunningLetter
     * @return \Pggns\MidocoApi\Orderlists\StructType\GetDunningLettersRequest
     */
    public function setMidocoDunningLetter(?\Pggns\MidocoApi\Orderlists\StructType\DunningLetterDTO $midocoDunningLetter = null): self
    {
        $this->MidocoDunningLetter = $midocoDunningLetter;
        
        return $this;
    }
}