<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Lovefeast\Brands;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _brand_id_
{
    /**
     * 查询爱心餐品牌信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/lovefeast/brands/get-brand.html
     */
    public function get(array $options = [
        'brand_id' => '2250',
    ]): ResponseInterface;

    /**
     * 查询爱心餐品牌信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/lovefeast/brands/get-brand.html#async
     */
    public function getAsync(array $options = [
        'brand_id' => '2250',
    ]): PromiseInterface;
}
