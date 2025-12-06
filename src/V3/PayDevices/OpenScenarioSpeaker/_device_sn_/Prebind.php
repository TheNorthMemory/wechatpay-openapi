<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\OpenScenarioSpeaker\_device_sn_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Prebind
{
    /**
     * 出厂预绑定音箱和码牌(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/prebind
     */
    public function post(array $options = [
        'device_sn' => 'ABCDEF',
        'json' => [
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
        ],
    ]): ResponseInterface;

    /**
     * 出厂预绑定音箱和码牌(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speaker/%7Bdevice_sn%7D/prebind
     */
    public function postAsync(array $options = [
        'device_sn' => 'ABCDEF',
        'json' => [
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
        ],
    ]): PromiseInterface;
}
