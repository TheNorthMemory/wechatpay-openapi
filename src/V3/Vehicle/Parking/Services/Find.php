<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Parking\Services;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Find
{
    /**
     * 查询车牌服务开通信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/parking/services/find
     */
    public function get(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
            'plate_number' => '粤B888888',
            'plate_color' => 'BLUE',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
        ],
    ]): ResponseInterface;

    /**
     * 查询车牌服务开通信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/vehicle/parking/services/find
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => 'wxcbda96de0b165486',
            'sub_mchid' => '1900000109',
            'plate_number' => '粤B888888',
            'plate_color' => 'BLUE',
            'openid' => 'oUpF8uMuAJOM2pxb1Q',
        ],
    ]): PromiseInterface;
}
