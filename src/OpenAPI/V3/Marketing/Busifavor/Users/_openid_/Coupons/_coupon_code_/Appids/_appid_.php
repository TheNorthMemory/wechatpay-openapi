<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Users\_openid_\Coupons\_coupon_code_\Appids;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _appid_
{
    /**
     * 查询用户单张券详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/busifavor/chapter3_5.shtml
     */
    public function get(array $options = [
        'coupon_code' => '',
        'appid' => '',
        'openid' => '',
    ]): ResponseInterface;

    /**
     * 查询用户单张券详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/marketing/busifavor/chapter3_5.shtml#async
     */
    public function getAsync(array $options = [
        'coupon_code' => '',
        'appid' => '',
        'openid' => '',
    ]): PromiseInterface;
}
