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
//use Combodo\iTop\Portal\Bricks\BricksCollection;
//use Combodo\iTop\Portal\Helper\ApplicationHelper;
//use Symfony\Component\DependencyInjection\ContainerBuilder;
//use Exception;
//use utils;
//use UserRights;
//use MetaModel;
//use DOMFormatException;
//
//class Bricks extends AbstractConfiguration
//{
//    public function process(ContainerBuilder $container)
//    {
////        $container->set('Combodo\\iTop\\Portal\\Bricks\\BricksCollection', $bricksCollection);
//        $container->register(BricksCollection::class)
//            ->setPublic(true)
//            ->setFactory([$this, 'factory'])
//        ;
////        $container->get(BricksCollection::class)->setRawList($bricksCollection);
//    }
//
//    public function factory()
//    {
//        ApplicationHelper::LoadBricks();
//
//        $aBricks = array();
//
//        foreach ($this->getModuleDesign()->GetNodes('/module_design/bricks/brick') as $oBrickNode)
//        {
//            $sBrickClass = $oBrickNode->getAttribute('xsi:type');
//            try
//            {
//                if (class_exists($sBrickClass))
//                {
//                    /** @var \Combodo\iTop\Portal\Brick\PortalBrick $oBrick */
//                    $oBrick = new $sBrickClass();
//                    $oBrick->LoadFromXml($oBrickNode);
//
//                    $aBricks[] = $oBrick;
//                }
//                else
//                {
//                    throw new DOMFormatException('Unknown brick class "'.$sBrickClass.'" from xsi:type attribute', null,
//                        null, $oBrickNode);
//                }
//            }
//            catch (DOMFormatException $e)
//            {
//                throw new Exception('Could not create brick ('.$sBrickClass.') from XML because of a DOM problem : '.$e->getMessage());
//            }
//            catch (Exception $e)
//            {
//                throw new Exception('Could not create brick ('.$sBrickClass.') from XML : '.$oBrickNode->Dump().' '.$e->getMessage());
//            }
//        }
//
//
//        $bricksCollection = new BricksCollection($aBricks);
//
//        return $bricksCollection;
//    }
//
//
//}