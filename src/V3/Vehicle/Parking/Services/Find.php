<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Vehicle\Parking\Services;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Find
{
    /**
     * 查询车牌服务开通信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_8_1.shtml
     */
    public function get(array $options = [
        'query' => [
            'appid' => '',
            'sub_mchid' => '',
            'plate_number' => '',
            'plate_color' => '',
            'openid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询车牌服务开通信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/apis/chapter8_8_1.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'appid' => '',
            'sub_mchid' => '',
            'plate_number' => '',
            'plate_color' => '',
            'openid' => '',
        ],
    ]): PromiseInterface;
}
