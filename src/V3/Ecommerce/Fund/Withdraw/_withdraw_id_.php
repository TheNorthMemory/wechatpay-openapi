<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund\Withdraw;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _withdraw_id_
{
    /**
     * 微信支付提现单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/withdraw/%7Bwithdraw_id%7D
     */
    public function get(array $options = [
        'withdraw_id' => '1232193719823791273913279173',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付提现单号查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/fund/withdraw/%7Bwithdraw_id%7D
     */
    public function getAsync(array $options = [
        'withdraw_id' => '1232193719823791273913279173',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
