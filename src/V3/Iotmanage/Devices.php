<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Iotmanage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Devices
{
    /**
     * 智能设备列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/iotmanage/devices
     */
    public function get(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
        ],
    ]): ResponseInterface;

    /**
     * 智能设备列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/iotmanage/devices
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
        ],
    ]): PromiseInterface;
}
