<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Iotmanage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Devices
{
    /**
     * 智能设备列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/point/iotmanage-devices.html
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
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/point/iotmanage-devices.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'limit' => 5,
            'offset' => 10,
        ],
    ]): PromiseInterface;
}
