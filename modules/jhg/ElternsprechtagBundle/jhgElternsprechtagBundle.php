<?php 

declare(strict_types=1);

namespace jhg\ElternsprechtagBundle;

use IServ\CoreBundle\Routing\AutoloadRoutingBundleInterface;
use jhg\ElternsprechtagBundle\DependencyInjection\jhgElternsprechtagExtension;
# use Symfony\Component\HttpKernel\Bundle\Bundle;


/**
 * @author Joseph-Haydn-Gymnasium Senden <test@jhgcloud.de>
 * @license MIT license <https://opensource.org/licenses/MIT>
 */
class jhgElternsprechtagBundle extends Bundle implements AutoloadRoutingBundleInterface
{
    public function getContainerExtension()
    {
        return new jhgElternsprechtagExtension();
    }
}