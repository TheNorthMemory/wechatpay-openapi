<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read UserTitle\TitleUrl $titleUrl
 */
interface UserTitle
{
    /**
     * 获取用户填写的抬头(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/user-title
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
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/user-title
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '1900000109',
            'scene' => 'WITH_WECHATPAY',
            'fapiao_apply_id' => '4200000444201910177461284488',
        ],
    ]): PromiseInterface;
}
