<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transactions\Id\_transaction_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 关闭订单(微信支付订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/id/%7Btransaction_id%7D/close
     */
    public function post(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'transaction_id' => '1217752501201407033233368018',
        'json' => [
            'mchid' => '1230000109',
            'sub_mchid' => '1230000109',
            'sp_mchid' => '1230000109',
        ],
    ]): ResponseInterface;

    /**
     * 关闭订单(微信支付订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/id/%7Btransaction_id%7D/close
     */
    public function postAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'transaction_id' => '1217752501201407033233368018',
        'json' => [
            'mchid' => '1230000109',
            'sub_mchid' => '1230000109',
            'sp_mchid' => '1230000109',
        ],
    ]): PromiseInterface;
}
