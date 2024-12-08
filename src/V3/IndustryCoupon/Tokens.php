<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\IndustryCoupon;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Tokens
{
    /**
     * 出行券切卡组件预下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-coupon/tokens
     */
    public function post(array $options = [
        'json' => [
            'open_id' => 'obLatjrR8kUDlj4-nofQsPAJAAFI',
            'coupon_list' => [[
                'stock_id' => 16474341,
                'coupon_id' => '11004999626',
            ],],
        ],
    ]): ResponseInterface;

    /**
     * 出行券切卡组件预下单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/industry-coupon/tokens
     */
    public function postAsync(array $options = [
        'json' => [
            'open_id' => 'obLatjrR8kUDlj4-nofQsPAJAAFI',
            'coupon_list' => [[
                'stock_id' => 16474341,
                'coupon_id' => '11004999626',
            ],],
        ],
    ]): PromiseInterface;
}
