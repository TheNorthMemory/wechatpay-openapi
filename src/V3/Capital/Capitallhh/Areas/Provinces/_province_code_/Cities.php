<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Areas\Provinces\_province_code_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface Cities
{
    /**
     * 查询城市列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_5.shtml
     */
    public function get(array $options = [
        'province_code' => '10',
    ]): ResponseInterface;

    /**
     * 查询城市列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_5.shtml#async
     */
    public function getAsync(array $options = [
        'province_code' => '10',
    ]): PromiseInterface;
}
