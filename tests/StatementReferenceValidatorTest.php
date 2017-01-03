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

use Rhumsaa\Uuid\Uuid as RhumsaaUuid;
use Xabbuh\XApi\Model\StatementId;
use Xabbuh\XApi\Model\StatementReference;
use Xabbuh\XApi\Model\Uuid as ModelUuid;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementReferenceValidatorTest extends AbstractModelValidatorTest
{
    public function getObjectsToValidate()
    {
        if (class_exists('\Xabbuh\XApi\Model\Uuid')) {
            $uuid = ModelUuid::uuid4();
        } else {
            $uuid = RhumsaaUuid::uuid4();
        }

        $withStatementId = new StatementReference(StatementId::fromUuid($uuid));

        return array(
            array($withStatementId, 0),
        );
    }
}
