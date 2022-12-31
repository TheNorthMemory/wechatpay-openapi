<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Capital\Capitallhh\Areas;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Provinces\_province_code_ $_province_code_
 */
interface Provinces
{
    /**
     * 查询省份列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_4.shtml
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询省份列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter11_2_4.shtml#async
     */
    public function getAsync(array $options = []): PromiseInterface;
}
