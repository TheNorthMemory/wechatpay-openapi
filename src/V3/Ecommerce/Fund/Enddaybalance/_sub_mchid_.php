<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund\Enddaybalance;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _sub_mchid_
{
    /**
     * 查询二级商户账户日终余额(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/amount/chapter3_2.shtml
     */
    public function get(array $options = [
        'sub_mchid' => '1222212222',
        'query' => [
            'date' => '2019-08-17',
        ],
    ]): ResponseInterface;

    /**
     * 查询二级商户账户日终余额(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/amount/chapter3_2.shtml#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1222212222',
        'query' => [
            'date' => '2019-08-17',
        ],
    ]): PromiseInterface;
}
