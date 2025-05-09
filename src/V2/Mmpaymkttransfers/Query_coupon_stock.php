<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Mmpaymkttransfers;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query_coupon_stock
{
    /**
     * 查询代金券批次(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/query_coupon_stock
     */
    public function post(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): ResponseInterface;

    /**
     * 查询代金券批次(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/mmpaymkttransfers/query_coupon_stock
     */
    public function postAsync(array $options = [
        'xml' => [
            'coupon_stock_id' => '1757',
            'appid' => 'wx5edab3bdfba3dc1c',
            'mch_id' => '10000098',
            'op_user_id' => '10000098',
            'device_info' => '',
            'version' => '1.0',
            'type' => 'XML',
        ],
    ]): PromiseInterface;
}
