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

use Hyperf\Di\MetadataCollector;

class EnumCollector extends MetadataCollector
{
    /**
     * @var array
     */
    protected static $container = [];

    public static function keys($className)
    {
        return static::$container[$className][0];
    }

    public static function values($className)
    {
        return static::$container[$className][1];
    }

    public static function valueOf($className, $key)
    {
        return static::$container[$className][1][$key];
    }
}
