<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Profitsharing\MerchantConfigs;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _sub_mchid_
{
    /**
     * 查询最大分账比例(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_7.shtml
     */
    public function get(array $options = [
        'sub_mchid' => '1900000109',
    ]): ResponseInterface;

    /**
     * 查询最大分账比例(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_1_7.shtml#async
     */
    public function getAsync(array $options = [
        'sub_mchid' => '1900000109',
    ]): PromiseInterface;
}
