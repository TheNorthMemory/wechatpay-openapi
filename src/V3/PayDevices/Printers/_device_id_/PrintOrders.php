<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\Printers\_device_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read PrintOrders\_print_order_no_ $_print_order_no_
 */
interface PrintOrders
{
    /**
     * 小票机打印(同步模式)
     * @param array<string,mixed> $options
     * @link 服务商控制小票机进行打印。
     */
    public function post(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'json' => [
            'print_order_no' => 'wx8888888888888888',
            'template_id' => 'pt_02583429616371386640209536',
            'notify_url' => 'https://payapp.weixin.qq.com/callback',
            'variable_list' => [[
                'key' => '',
                'value' => '',
            ],],
            'table_list' => [[
                'key' => '',
                'row_list' => [[
                    'cell_list' => ['string'],
                ],],
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 小票机打印(异步模式)
     * @param array<string,mixed> $options
     * @link 服务商控制小票机进行打印。#async
     */
    public function postAsync(array $options = [
        'device_id' => 'WINCIE*EIXHRB',
        'json' => [
            'print_order_no' => 'wx8888888888888888',
            'template_id' => 'pt_02583429616371386640209536',
            'notify_url' => 'https://payapp.weixin.qq.com/callback',
            'variable_list' => [[
                'key' => '',
                'value' => '',
            ],],
            'table_list' => [[
                'key' => '',
                'row_list' => [[
                    'cell_list' => ['string'],
                ],],
            ],],
        ],
    ]): PromiseInterface;
}
