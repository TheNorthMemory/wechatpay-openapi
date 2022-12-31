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
     * @link 商户根据品牌ID查询爱心餐品牌的捐赠与供餐信息。
     */
    public function get(array $options = [
        'brand_id' => '2250',
    ]): ResponseInterface;

    /**
     * 查询爱心餐品牌信息(异步模式)
     * @param array<string,mixed> $options
     * @link 商户根据品牌ID查询爱心餐品牌的捐赠与供餐信息。#async
     */
    public function getAsync(array $options = [
        'brand_id' => '2250',
    ]): PromiseInterface;
}
