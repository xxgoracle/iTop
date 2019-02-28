<?php
/**
 * Created by Bruno DA SILVA, working for Combodo
 * Date: 28/02/19
 * Time: 16:59
 */

namespace Combodo\iTop\Portal\VariableAccessor;


abstract class AbstractVariableAccessor
{
    /**
     * @var string
     */
    private $sStoredVariable;

    /**
     * @param string $sVariableToStore
     */
    public function __construct($sVariableToStore)
    {

        $this->sStoredVariable = $sVariableToStore;
    }
    
    public function __toString()
    {
        return $this->sStoredVariable;
    }
}