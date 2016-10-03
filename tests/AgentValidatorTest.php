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
use Xabbuh\XApi\Model\Agent;
use Xabbuh\XApi\Model\InverseFunctionalIdentifier;
use Xabbuh\XApi\Model\IRI;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class AgentValidatorTest extends AbstractModelValidatorTest
{
    public function getObjectsToValidate()
    {
        return array(
            array(ActorFixtures::getTypicalAgent(), 0),
        );
    }
}
