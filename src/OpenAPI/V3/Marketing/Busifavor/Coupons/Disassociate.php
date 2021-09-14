<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Disassociate
{
    /**
     * 取消关联订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_10.shtml
     */
    public function post(array $options = [
        'json' => [
            'stock_id' => '',
            'coupon_code' => '',
            'out_trade_no' => '',
            'out_request_no' => '',
        ],
    ]): ResponseInterface;

    /**
     * 取消关联订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_10.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_id' => '',
            'coupon_code' => '',
            'out_trade_no' => '',
            'out_request_no' => '',
        ],
    ]): PromiseInterface;
}
