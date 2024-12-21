<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Querycouponsinfo
{
    /**
     * 查询代金券信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/querycouponsinfo
     */
    public function post(array $options = [
        'xml' => [
            'coupon_id' => '1565',
            'openid' => 'onqOjjrXT-776SpHnfexGm1_P7iE',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'stock_id' => '58818',
            'op_user_id' => '10000098',
            'device_info' => '013467007045764',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/querycouponsinfo
     */
    public function postAsync(array $options = [
        'xml' => [
            'coupon_id' => '1565',
            'openid' => 'onqOjjrXT-776SpHnfexGm1_P7iE',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'stock_id' => '58818',
            'op_user_id' => '10000098',
            'device_info' => '013467007045764',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): PromiseInterface;
}
