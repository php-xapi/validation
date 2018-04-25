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

use PHPUnit\Framework\TestCase;
use Symfony\Component\Validator\Mapping\Factory\MetadataFactoryInterface;
use Symfony\Component\Validator\ValidatorInterface;
use Xabbuh\XApi\Validator\Validator;

/**
 * @author Christian Flothmann <christian.flothmann@xabbuh.de>
 */
class ValidatorTest extends TestCase
{
    public function testRegisterXApiConstraints()
    {
        $validatorBuilder = $this->getMockBuilder('\Symfony\Component\Validator\ValidatorBuilderInterface')->getMock();
        $validatorBuilder->expects($this->once())
            ->method('addXmlMappings');

        Validator::registerXApiConstraints($validatorBuilder);
    }

    public function testCreateValidatorBuilder()
    {
        $builder = Validator::createValidatorBuilder();

        $this->validateXApiValidator($builder->getValidator());
    }

    public function testCreateValidator()
    {
        $this->validateXApiValidator(Validator::createValidator());
    }

    private function validateXApiValidator($validator)
    {
        if ($validator instanceof MetadataFactoryInterface) {
            $metadataFactory = $validator;
        } else {
            $metadataFactory = $validator->getMetadataFactory();
        }

        $this->assertTrue(
            $metadataFactory->hasMetadataFor('\Xabbuh\XApi\Model\Activity')
        );
        $this->assertTrue(
            $metadataFactory->hasMetadataFor('\Xabbuh\XApi\Model\Agent')
        );
        $this->assertTrue(
            $metadataFactory->hasMetadataFor('\Xabbuh\XApi\Model\Activity')
        );
        $this->assertTrue(
            $metadataFactory->hasMetadataFor('\Xabbuh\XApi\Model\Activity')
        );
    }
}
