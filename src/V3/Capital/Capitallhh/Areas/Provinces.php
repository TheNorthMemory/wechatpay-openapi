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
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/areas/provinces
     */
    public function get(array $options = []): ResponseInterface;

    /**
     * 查询省份列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/capital/capitallhh/areas/provinces
     */
    public function getAsync(array $options = []): PromiseInterface;
}
