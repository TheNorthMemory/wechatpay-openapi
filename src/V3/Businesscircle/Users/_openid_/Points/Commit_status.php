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
     * @link https://wechatpay.im/openapi/v3/businesscircle/users/%7Bopenid%7D/points/commit_status
     */
    public function get(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'sub_mchid' => '1900000109',
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
        ],
    ]): ResponseInterface;

    /**
     * 商圈会员待积分状态查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/businesscircle/users/%7Bopenid%7D/points/commit_status
     */
    public function getAsync(array $options = [
        'openid' => 'oUpF8uMuAJOM2pxb1Q',
        'query' => [
            'sub_mchid' => '1900000109',
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
        ],
    ]): PromiseInterface;
}
