<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund\Withdraw;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _withdraw_id_
{
    /**
     * 微信支付提现单号查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_3.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'withdraw_id' => '1232193719823791273913279173',
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
