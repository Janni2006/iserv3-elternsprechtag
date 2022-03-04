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

/**
 * Class DefaultController
 * @package jhg\ElternsprechtagBundle\Controller
 * @Route("/test")
 */
class DefaultController extends AbstractPageController {
    // /**
    //  * @param Config $config
    //  * @param Request $request
    //  * @return Response
    //  * @Route("/", name="test")
    //  */
    /**
     * @Route("/internet", name="internet_index")
     * @Template()
     *
     * @return array|RedirectResponse
     */
    public function index(Request $request, Config $config) {
        $this->addBreadcrumb(_("test"));

        $this->addBreadcrumb(_('Internet'), $this->generateUrl('internet_index'));

        return $this->render("@DH_ElternsprechtagBundle/empty.html.twig");
    }
}