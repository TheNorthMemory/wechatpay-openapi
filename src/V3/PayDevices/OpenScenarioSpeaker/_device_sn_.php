<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\OpenScenarioSpeaker;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _device_sn_\Bind $bind
 * @property-read _device_sn_\Prebind $prebind
 * @property-read _device_sn_\Unbind $unbind
 */
interface _device_sn_
{
    /**
     * 查询音箱绑定信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D
     */
    public function get(array $options = [
        'device_sn' => 'ABCDEF',
    ]): ResponseInterface;

    /**
     * 查询音箱绑定信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D
     */
    public function getAsync(array $options = [
        'device_sn' => 'ABCDEF',
    ]): PromiseInterface;
}
