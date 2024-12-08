<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface\FaceCollections;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _collection_id_
{
    /**
     * 查询重采请求详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/face-collections/%7Bcollection_id%7D
     */
    public function get(array $options = [
        'collection_id' => 'FC2353ZJIHOJKHOIIOIJ',
    ]): ResponseInterface;

    /**
     * 查询重采请求详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/face-collections/%7Bcollection_id%7D
     */
    public function getAsync(array $options = [
        'collection_id' => 'FC2353ZJIHOJKHOIIOIJ',
    ]): PromiseInterface;
}
