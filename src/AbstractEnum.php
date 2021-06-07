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

abstract class AbstractEnum
{
    /**
     * 获取 keys.
     */
    public static function keys(): array
    {
        return EnumCollector::keys(static::class);
    }

    /**
     * 获取 values.
     */
    public static function values(): array
    {
        return EnumCollector::values(static::class);
    }

    public static function valueOf($key)
    {
        return EnumCollector::valueOf(static::class, $key);
    }
}
