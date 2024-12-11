<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Payitil;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Report
{
    /**
     * 交易保障(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/payitil/report
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'interface_url' => 'https://api.mch.weixin.qq.com/pay/batchreport/micropay/total',
            'user_ip' => '8.8.8.8',
            'trades' => \json_encode([[
                'out_trade_no' => 'out_trade_no_test_1',
                'begin_time' => '20160602203256',
                'end_time' => '20160602203257',
                'state' => 'OK',
                'err_msg' => '',
            ],]),
        ],
    ]): ResponseInterface;

    /**
     * 交易保障(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/payitil/report
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wx8888888888888888',
            'mch_id' => '1900000109',
            'device_info' => '013467007045764',
            'interface_url' => 'https://api.mch.weixin.qq.com/pay/batchreport/micropay/total',
            'user_ip' => '8.8.8.8',
            'trades' => \json_encode([[
                'out_trade_no' => 'out_trade_no_test_1',
                'begin_time' => '20160602203256',
                'end_time' => '20160602203257',
                'state' => 'OK',
                'err_msg' => '',
            ],]),
        ],
    ]): PromiseInterface;
}
