<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayDevices\OpenScenarioSpeakerorder\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Report
{
    /**
     * 码牌支付结果上报(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speakerorder/%7Btransaction_id%7D/report
     */
    public function post(array $options = [
        'transaction_id' => '20190611222222222200000000012122',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
            'out_trade_no' => 'example_out_trade_no',
            'device_sn' => 'example_device_sn',
        ],
    ]): ResponseInterface;

    /**
     * 码牌支付结果上报(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/pay-devices/open-scenario-speakerorder/%7Btransaction_id%7D/report
     */
    public function postAsync(array $options = [
        'transaction_id' => '20190611222222222200000000012122',
        'json' => [
            'sub_mchid' => '1900000001',
            'code_url' => 'URl:weixin://wxpay/s/An4baqw',
            'out_trade_no' => 'example_out_trade_no',
            'device_sn' => 'example_device_sn',
        ],
    ]): PromiseInterface;
}
