<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Iotmanage\DeviceInspections;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _device_sn_
{
    /**
     * 获取出厂检查结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/iotmanage/device-inspections/%7Bdevice_sn%7D
     */
    public function get(array $options = [
        'device_sn' => 'AAAAA123456789012345678',
    ]): ResponseInterface;

    /**
     * 获取出厂检查结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/iotmanage/device-inspections/%7Bdevice_sn%7D
     */
    public function getAsync(array $options = [
        'device_sn' => 'AAAAA123456789012345678',
    ]): PromiseInterface;
}
