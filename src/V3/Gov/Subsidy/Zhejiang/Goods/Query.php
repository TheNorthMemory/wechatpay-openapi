<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Goods;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 商品信息查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/goods/query
     */
    public function post(array $options = [
        'json' => [
            'goods_bar_code' => '',
            'province' => '',
            'req_ssn' => '123',
            'req_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * 商品信息查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/goods/query
     */
    public function postAsync(array $options = [
        'json' => [
            'goods_bar_code' => '',
            'province' => '',
            'req_ssn' => '123',
            'req_time' => '',
        ],
    ]): PromiseInterface;
}
