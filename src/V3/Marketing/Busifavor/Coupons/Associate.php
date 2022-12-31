<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Associate
{
    /**
     * 关联订单信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_9.shtml
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
     * 关联订单信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_9.shtml#async
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
