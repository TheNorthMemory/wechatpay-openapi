<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Lovefeast\Users\_openid_\Orders\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_trade_no_
{
    /**
     * 查询用户捐赠单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/lovefeast/users/%7Bopenid%7D/orders/out-trade-no/%7Bout_trade_no%7D
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'out_trade_no' => '1217752501201407033233368018',
    ]): ResponseInterface;

    /**
     * 查询用户捐赠单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/lovefeast/users/%7Bopenid%7D/orders/out-trade-no/%7Bout_trade_no%7D
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'out_trade_no' => '1217752501201407033233368018',
    ]): PromiseInterface;
}
