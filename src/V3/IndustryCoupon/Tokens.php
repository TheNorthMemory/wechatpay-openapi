<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\IndustryCoupon;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Tokens
{
    /**
     * 出行券切卡组件预下单(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_9_1.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_9_1.shtml#async
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
