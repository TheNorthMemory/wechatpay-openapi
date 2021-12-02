<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read UserTitle\TitleUrl $titleUrl
 */
interface UserTitle
{
    /**
     * 获取用户填写的抬头(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_6.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
            'fapiao_apply_id' => '4200000444201910177461284488',
        ],
    ]): ResponseInterface;

    /**
     * 获取用户填写的抬头(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_6.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
            'fapiao_apply_id' => '4200000444201910177461284488',
        ],
    ]): PromiseInterface;
}
