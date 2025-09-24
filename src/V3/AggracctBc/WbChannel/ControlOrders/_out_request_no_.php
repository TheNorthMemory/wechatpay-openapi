<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\ControlOrders;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 查询控制单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => 'out_request_no_example',
        'query' => [
            'control_type' => 'PUNISH',
            'mchid' => '1900016681',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询控制单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/control-orders/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => 'out_request_no_example',
        'query' => [
            'control_type' => 'PUNISH',
            'mchid' => '1900016681',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
