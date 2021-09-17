<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Refunds;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Apply
{
    /**
     * 退款申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [],
            'notify_url' => 'https://weixin.qq.com',
        ],
    ]): ResponseInterface;

    /**
     * 退款申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/refunds/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'sp_appid' => 'wx8888888888888888',
            'sub_appid' => 'wx8888888888888888',
            'transaction_id' => '1217752501201407033233368018',
            'out_trade_no' => '1217752501201407033233368018',
            'out_refund_no' => '1217752501201407033233368018',
            'reason' => '商品已售完',
            'amount' => [],
            'notify_url' => 'https://weixin.qq.com',
        ],
    ]): PromiseInterface;
}
