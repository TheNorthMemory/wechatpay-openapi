<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Businesscircle\Users\_openid_\Points;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Commit_status
{
    /**
     * 商圈会员待积分状态查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter8_6_7.shtml
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
        ],
    ]): ResponseInterface;

    /**
     * 商圈会员待积分状态查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter8_6_7.shtml#async
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
        ],
    ]): PromiseInterface;
}
