<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PayrollCard\Relations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _openid_
{
    /**
     * 查询微工卡授权关系(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_2.shtml
     */
    public function get(array $options = [
        'openid' => '9x111111',
        'query' => [
            'sub_mchid' => '1111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
        ],
    ]): ResponseInterface;

    /**
     * 查询微工卡授权关系(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter4_1_2.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => '9x111111',
        'query' => [
            'sub_mchid' => '1111111',
            'appid' => 'wxa1111111',
            'sub_appid' => 'wxa1111111',
        ],
    ]): PromiseInterface;
}
