<?php

namespace Arithnea\ArimanBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

/**
 * @Route("/man")
 */
class DefaultController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array( 'name'=> "INDEX");
    }
  
    
    
    /**
     * @Route("/{id}/{res}/{format}/{name}",requirements={"id" = "\d+","res"="[a-zA-Z0-9\-_\/]+"})
     * @Method({"GET"})
     * @Template()
     */
    public function showAction($id,$res,$format,$name)
    {
        // id exist
        // res exist
        // format exist
        // name egal
        
        echo $this->container->getParameter('images_dir');
        echo $this->container->getParameter('cache_dir');
        return array( 'id'=> $id,'res' => $res,'name' => $name);
    }    
    
}
