<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Lovefeast\Users\_openid_\Orders\OutTradeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _out_trade_no_
{
    /**
     * 查询用户捐赠单详情(同步模式)
     * @param array<string,mixed> $options
     * @link 商户根据商户订单号与用户标识查询捐赠单详情
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'out_trade_no' => '1217752501201407033233368018',
    ]): ResponseInterface;

    /**
     * 查询用户捐赠单详情(异步模式)
     * @param array<string,mixed> $options
     * @link 商户根据商户订单号与用户标识查询捐赠单详情#async
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJO_M2pxb1Q9zNjWeS6o',
        'out_trade_no' => '1217752501201407033233368018',
    ]): PromiseInterface;
}
