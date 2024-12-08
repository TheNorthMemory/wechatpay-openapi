<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Businesscircle;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Parkings
{
    /**
     * 商圈会员停车状态同步(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/businesscircle/parkings
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plate_number' => '粤B888888',
            'state' => 'IN',
            'time' => '2022-06-01T10:43:39+08:00',
        ],
    ]): ResponseInterface;

    /**
     * 商圈会员停车状态同步(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/businesscircle/parkings
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'brandid' => 1000,
            'appid' => 'wx931386123456789e',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
            'plate_number' => '粤B888888',
            'state' => 'IN',
            'time' => '2022-06-01T10:43:39+08:00',
        ],
    ]): PromiseInterface;
}
