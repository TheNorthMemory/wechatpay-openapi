<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V2\Pay\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Paporderquery
{
    /**
     * 查询订单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/partner/paporderquery
     */
    public function post(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sub_appid' => '',
            'sub_mch_id' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v2/pay/partner/paporderquery
     */
    public function postAsync(array $options = [
        'xml' => [
            'appid' => 'wxcbda96de0b165486',
            'mch_id' => '10000098',
            'transaction_id' => '1009660380201506130728806387',
            'out_trade_no' => '20150806125346',
            'sub_appid' => '',
            'sub_mch_id' => '',
        ],
    ]): PromiseInterface;
}
