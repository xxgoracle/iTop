<?php
///**
// * Created by Bruno DA SILVA, working for Combodo
// * Date: 28/01/19
// * Time: 16:20
// */
//
//namespace Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration;
//
//use Combodo\iTop\Portal\Helper\ContextManipulatorHelper;
//use Exception;
//use Symfony\Component\DependencyInjection\ContainerBuilder;
//use utils;
//
//class ActionRules extends AbstractConfiguration
//{
//
//    public function process(ContainerBuilder $container)
//    {
//        $oContextManipulatorHelper = new ContextManipulatorHelper();
//        $oContextManipulatorHelper->Init($this->getModuleDesign()->GetNodes('/module_design/action_rules/action_rule'));
//
//        $container->set('context_manipulator', $oContextManipulatorHelper);
//    }
//
//}