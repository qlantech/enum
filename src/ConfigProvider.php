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

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
            ],
            'commands' => [
            ],
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                    'collectors' => [
                        EnumCollector::class,
                    ],
                ],
            ],
        ];
    }
}
