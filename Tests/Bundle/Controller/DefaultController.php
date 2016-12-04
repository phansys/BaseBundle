<?php

/*
 * This file is part of the BaseBundle for Symfony2.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 */

declare(strict_types=1);

namespace Mmoreram\BaseBundle\Tests\Bundle\Controller;

use Symfony\Component\HttpFoundation\Response;

/**
 * Class DefaultController.
 */
class DefaultController
{
    /**
     * Small action.
     */
    public function smallAction()
    {
        return new Response();
    }
}