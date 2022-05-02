<?php

declare(strict_types=1);

namespace jhg\ElternsprechtagBundle\Controller;

use IServ\CoreBundle\Controller\AbstractPageController;
use IServ\HostBundle\Service\Network;
use IServ\Library\Config\Config;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Validator\Constraints\NotBlank;
use Symfony\Component\HttpFoundation\Response;

/**
 * 
 * 
 * 
 */
class DefaultController extends AbstractPageController {
    /**
    * @Route("/test/internet/", name="internet_index")
    * 
    * @return Response
    */
    public function index(Request $request, Config $config) {

        return $this->render("@ElternsprechtagBundle/default/empty.html.twig");
        // return $this->render(" @IServCore/Dashboard/main.html.twig");
        // return new Response('<html><body>Test</body></html>');
    }
}