<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\OpenScenarioSpeaker\_device_sn_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Bind
{
    /**
     * 绑定音箱设备码牌(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/bind
     */
    public function post(array $options = [
        'device_sn' => 'ABCDEF',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
        ],
    ]): ResponseInterface;

    /**
     * 绑定音箱设备码牌(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/bind
     */
    public function postAsync(array $options = [
        'device_sn' => 'ABCDEF',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
        ],
    ]): PromiseInterface;
}
