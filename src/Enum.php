<?php

declare(strict_types=1);

/**
 * This file is part of the qlantech/enum.
 *
 * (c) Qlantech <guanfang@changdou.vip>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace Qltech\Enum;

use Hyperf\Di\Annotation\AbstractAnnotation;
use ReflectionClass;
use ReflectionException;

/**
 * @Annotation
 * @Target("CLASS")
 */
class Enum extends AbstractAnnotation
{
    /**
     * @throws ReflectionException
     */
    public function collectClass(string $className): void
    {
        $reader = new EnumReader();

        $ref = new ReflectionClass($className);
        $classConstants = $ref->getReflectionConstants();
        $data = $reader->getAnnotations($classConstants);

        EnumCollector::set($className, $data);
    }
}
