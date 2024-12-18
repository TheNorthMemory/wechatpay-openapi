<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Send_coupon
{
    /**
     * 发放代金券(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/send_coupon
     */
    public function post(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'openid_count' => '1',
            'partner_trade_no' => '1000009820141203515766',
            'openid' => 'onqOjjrXT-776SpHnfexGm1_P7iE',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
        'security' => true,
    ]): ResponseInterface;

    /**
     * 发放代金券(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/send_coupon
     */
    public function postAsync(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'openid_count' => '1',
            'partner_trade_no' => '1000009820141203515766',
            'openid' => 'onqOjjrXT-776SpHnfexGm1_P7iE',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
        'security' => true,
    ]): PromiseInterface;
}
