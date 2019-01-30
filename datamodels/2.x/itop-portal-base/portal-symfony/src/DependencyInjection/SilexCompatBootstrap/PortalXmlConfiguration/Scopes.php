<?php
///**
// * Created by Bruno DA SILVA, working for Combodo
// * Date: 24/01/19
// * Time: 16:52
// */
//
//namespace Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration;
//
//
//use Combodo\iTop\Portal\Helper\ScopeValidatorHelper;
//use Symfony\Component\DependencyInjection\ContainerBuilder;
//use Exception;
//use utils;
//
//class Scopes extends AbstractConfiguration
//{
//    public function process(ContainerBuilder $container)
//    {
//        $params = array(
//            'scope_validator.scopes_path' => utils::GetCachePath(),
//            'scope_validator.scopes_filename' => PORTAL_ID . '.scopes.php',
//            'scope_validator.instance_name' => PORTAL_ID
//        );
//
//        $oScopeValidatorHelper = new ScopeValidatorHelper($params['scope_validator.scopes_filename'], $params['scope_validator.scopes_path']);
//        if (isset($params['scope_validator.instance_name']))
//        {
//            $oScopeValidatorHelper->SetInstancePrefix($params['scope_validator.instance_name'] . '-');
//        }
//        $oScopeValidatorHelper->Init($this->getModuleDesign()->GetNodes('/module_design/classes/class'));
//
//
//
//        $container->set(ScopeValidatorHelper::class, $oScopeValidatorHelper); //['combodo.portal.instance.conf'][...]
//    }
//
//
//}