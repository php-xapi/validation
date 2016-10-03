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

use Rhumsaa\Uuid\Uuid;
use Xabbuh\XApi\Model\StatementId;
use Xabbuh\XApi\Model\StatementReference;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class StatementReferenceValidatorTest extends AbstractModelValidatorTest
{
    public function getObjectsToValidate()
    {
        $withStatementId = new StatementReference(StatementId::fromUuid(Uuid::uuid4()));

        return array(
            array($withStatementId, 0),
        );
    }
}
