<?php
// Configuring Silex application
//$oApp['debug'] = $bDebug;



use Combodo\iTop\Portal\Helper\ApplicationHelper;



if (!defined('PORTAL_ID') || PORTAL_ID === false) {
    return;
}


require_once (APPROOT . 'core/moduledesign.class.inc.php');




//$container->setParameter('debug', $container->getParameter('debug'));
$container->setParameter('combodo.current_environment', utils::GetCurrentEnvironment());
$container->setParameter('combodo.absolute_url', utils::GetAbsoluteUrlAppRoot());
$container->setParameter('combodo.modules.absolute_url',  utils::GetAbsoluteUrlAppRoot() . 'env-' . utils::GetCurrentEnvironment());
$container->setParameter('combodo.portal.base.absolute_url', utils::GetAbsoluteUrlAppRoot() . 'env-' . utils::GetCurrentEnvironment() . '/itop-portal-base/portal/web/');
$container->setParameter('combodo.portal.base.absolute_path',  MODULESROOT . '/itop-portal-base/portal/web/');
$container->setParameter('combodo.portal.instance.absolute_url', utils::GetAbsoluteUrlAppRoot() . 'env-' . utils::GetCurrentEnvironment() . '/' . PORTAL_MODULE_ID . '/');
$container->setParameter('combodo.portal.instance.id', PORTAL_MODULE_ID);


$container->setParameter('combodo.portal.instance.conf', array());
$container->setParameter('combodo.portal.instance.routes', array());



// A bunch of dependency injections happens here, It was originally wrote with the required interface in order to be compiled,
// but a lot of the code is context dependent and must not be compiled.
// This is a rewrite of initialisation wrote in the previous portal wrote using silex. The idea behind the rewrite is to
// try to keep the original logic, even if it is not in line with symfony's conventions.
// TODO: Once the code is stabilized, it should be refactored in order to be more conventional.


// Loading file
if ($container->has('ModuleDesign')) {
    $moduleDesign = $container->get('ModuleDesign');
} else {
    $moduleDesign =  new \ModuleDesign(PORTAL_ID);
//    $container->set('ModuleDesign', $moduleDesign);
}

$basicCompat = new \Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration\Basic($moduleDesign);
$basicCompat->process($container);

$formsCompat = new \Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration\Forms($moduleDesign);
$formsCompat->process($container);

$listesCompat = new \Combodo\iTop\Portal\DependencyInjection\SilexCompatBootstrap\PortalXmlConfiguration\Lists($moduleDesign);
$listesCompat->process($container);

// - Setting UrlMakerClass
if ($container->getParameter('combodo.portal.instance.conf')['properties']['urlmaker_class'] !== null)
{
    //TODO: this is an example of a not working code: since the container is compiled, this code will not be executed on each request on a production env. and thus would fail it must be moved in an (early) event listener (@see ItopUserProvider)
    ApplicationContext::SetUrlMakerClass($container->getParameter('combodo.portal.instance.conf')['properties']['urlmaker_class']);
}

// - Generating CSS files
$aImportPaths = array($container->getParameter('combodo.portal.base.absolute_path').'css/');
$aPortalConf = $container->getParameter('combodo.portal.instance.conf');
foreach ($aPortalConf['properties']['themes'] as $key => $value)
{
    if (!is_array($value))
    {
        $aPortalConf['properties']['themes'][$key] = $container->getParameter('combodo.absolute_url').utils::GetCSSFromSASS('env-'.utils::GetCurrentEnvironment().'/'.$value, $aImportPaths);
    }
    else
    {
        $aValues = array();
        foreach ($value as $sSubvalue)
        {
            $aValues[] = $container->getParameter('combodo.absolute_url').utils::GetCSSFromSASS('env-'.utils::GetCurrentEnvironment().'/'.$sSubvalue, $aImportPaths);
        }
        $aPortalConf['properties']['themes'][$key] = $aValues;
    }
}
$container->setParameter('combodo.portal.instance.conf', $aPortalConf);


//session messages
$aAllMessages = array();
if ((array_key_exists('obj_messages', $_SESSION)) && (!empty($_SESSION['obj_messages'])))
{
    foreach ($_SESSION['obj_messages'] as $sMessageKey => $aMessageObjectData)
    {
        $aObjectMessages = array();
        $aRanks = array();
        foreach ($aMessageObjectData as $sMessageId => $aMessageData)
        {
            $sMsgClass = 'alert alert-';
            switch ($aMessageData['severity'])
            {
                case 'info':
                    $sMsgClass .= 'info';
                    break;
                case 'error':
                    $sMsgClass .= 'danger';
                    break;
                case 'ok':
                default:
                    $sMsgClass .= 'success';
                    break;
            }
            $aObjectMessages[] = array('cssClass' => $sMsgClass, 'message' => $aMessageData['message']);
            $aRanks[] = $aMessageData['rank'];
        }
        unset($_SESSION['obj_messages'][$sMessageKey]);
        array_multisort($aRanks, $aObjectMessages);
        foreach ($aObjectMessages as $aObjectMessage)
        {
            $aAllMessages[] = $aObjectMessage;
        }
    }
}
//$oApp['combodo.current_user.session_messages'] = $aAllMessages;
$container->setParameter('combodo.current_user.session_messages', $aAllMessages);
//end of session messages

