<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\Merchant;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface BaseInformation
{
    /**
     * 获取商户开票基础信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_3.shtml
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): ResponseInterface;

    /**
     * 获取商户开票基础信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/new-tax-control-fapiao/chapter3_3.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
        ],
    ]): PromiseInterface;
}
