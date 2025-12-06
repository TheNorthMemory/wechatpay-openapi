<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\OpenScenarioSpeaker\_device_sn_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Unbind
{
    /**
     * 解绑音箱设备码牌(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/unbind
     */
    public function post(array $options = [
        'device_sn' => 'ABCDEF',
    ]): ResponseInterface;

    /**
     * 解绑音箱设备码牌(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/unbind
     */
    public function postAsync(array $options = [
        'device_sn' => 'ABCDEF',
    ]): PromiseInterface;
}
