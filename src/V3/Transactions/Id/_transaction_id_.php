<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Transactions\Id;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _transaction_id_\Close $close
 * @property-read _transaction_id_\Reverse $reverse
 */
interface _transaction_id_
{
    /**
     * 查询订单(微信支付订单号)(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/id/%7Btransaction_id%7D
     */
    public function get(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'transaction_id' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): ResponseInterface;

    /**
     * 查询订单(微信支付订单号)(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transactions/id/%7Btransaction_id%7D
     */
    public function getAsync(array $options = [
        'base_uri' => 'https://api.mch.weixin.qq.com/hk/', // 跨境(国内接入)
        'transaction_id' => '1217752501201407033233368018',
        'query' => [
            'mchid' => '1900000109',
            'sub_mchid' => '1900000109',
            'sp_mchid' => '1900000100',
        ],
    ]): PromiseInterface;
}
