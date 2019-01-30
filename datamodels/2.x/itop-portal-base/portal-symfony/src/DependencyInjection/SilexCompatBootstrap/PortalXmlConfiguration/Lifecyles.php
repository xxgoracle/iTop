<?php
/**
 * Created by Bruno DA SILVA, working for Combodo
 * Date: 24/01/19
 * Time: 16:52
 */

namespace Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration;


use Symfony\Component\DependencyInjection\ContainerBuilder;
use Exception;
use utils;
use Combodo\iTop\Portal\Helper\LifecycleValidatorHelper;

class Lifecyles extends AbstractConfiguration
{
    public function process(ContainerBuilder $container)
    {
        $params =  array(
            'lifecycle_validator.lifecycle_path' => utils::GetCachePath(),
            'lifecycle_validator.lifecycle_filename' => PORTAL_ID . '.lifecycle.php',
            'lifecycle_validator.instance_name' => PORTAL_ID
        );


        $oLifecycleValidatorHelper = new LifecycleValidatorHelper($params['lifecycle_validator.lifecycle_filename'], $params['lifecycle_validator.lifecycle_path']);
        if (isset($params['lifecycle_validator.instance_name']))
        {
            $oLifecycleValidatorHelper->SetInstancePrefix($params['lifecycle_validator.instance_name'] . '-');
        }


        $oLifecycleValidatorHelper->Init($this->getModuleDesign()->GetNodes('/module_design/classes/class'));



        $container->set('lifecycle_validator', $oLifecycleValidatorHelper); //['combodo.portal.instance.conf'][...]
    }


}