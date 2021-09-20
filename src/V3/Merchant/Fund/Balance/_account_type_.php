<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Balance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _account_type_
{
    /**
     * 查询电商平台账户实时余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/amount/chapter3_3.shtml
     */
    public function get(array $options = [
        'account_type' => '',
    ]): ResponseInterface;

    /**
     * 查询电商平台账户实时余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/amount/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'account_type' => '',
    ]): PromiseInterface;
}
