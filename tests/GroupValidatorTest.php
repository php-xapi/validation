<?php

/*
 * This file is part of the xAPI package.
 *
 * (c) Christian Flothmann <christian.flothmann@xabbuh.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Xabbuh\XApi\Validator\Tests;

use Xabbuh\XApi\DataFixtures\ActorFixtures;
use Xabbuh\XApi\Model\Group;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class GroupValidatorTest extends AbstractModelValidatorTest
{
    public function getObjectsToValidate()
    {
        return array(
            array(new Group(null, null, array(ActorFixtures::getTypicalAgent())), 0, array('anonymous')),
            array(ActorFixtures::getTypicalGroup(), 0, array('identified')),
        );
    }
}
