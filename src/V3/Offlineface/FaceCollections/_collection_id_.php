<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\FaceCollections;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _collection_id_
{
    /**
     * 查询重采请求接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html
     */
    public function get(array $options = [
        'collection_id' => '',
        'query' => [
            'appid' => '',
        ],
    ]): ResponseInterface;

    /**
     * 查询重采请求接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html#async
     */
    public function getAsync(array $options = [
        'collection_id' => '',
        'query' => [
            'appid' => '',
        ],
    ]): PromiseInterface;
}
