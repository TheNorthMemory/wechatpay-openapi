<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Global_\ProfitSharing\Transactions;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Mark
{
    /**
     * 分账标记(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/transactions/mark
     */
    public function post(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'out_trade_no' => 'P20150806125346',
            'currency' => 'CNY',
        ],
    ]): ResponseInterface;

    /**
     * 分账标记(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/global/profit-sharing/transactions/mark
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://apihk.mch.weixin.qq.com/', // 跨境(香港接入)
        'json' => [
            'sub_mchid' => '1900000109',
            'out_trade_no' => 'P20150806125346',
            'currency' => 'CNY',
        ],
    ]): PromiseInterface;
}
