<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Coupons\_card_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send
{
    /**
     * 发放消费卡(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/coupons/chapter3_1.shtml
     */
    public function post(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'openid' => '',
            'out_request_no' => '',
            'send_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * 发放消费卡(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/coupons/chapter3_1.shtml#async
     */
    public function postAsync(array $options = [
        'card_id' => '',
        'json' => [
            'appid' => '',
            'openid' => '',
            'out_request_no' => '',
            'send_time' => '',
        ],
    ]): PromiseInterface;
}
