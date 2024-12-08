<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlineface;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read FaceCollections\_collection_id_ $_collection_id_
 */
interface FaceCollections
{
    /**
     * 查询重采用户列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/face-collections
     */
    public function get(array $options = [
        'query' => [
            'organization_id' => 'Ofewewfwefweewf',
            'offset' => 30,
            'limit' => 20,
        ],
    ]): ResponseInterface;

    /**
     * 查询重采用户列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/offlineface/face-collections
     */
    public function getAsync(array $options = [
        'query' => [
            'organization_id' => 'Ofewewfwefweewf',
            'offset' => 30,
            'limit' => 20,
        ],
    ]): PromiseInterface;
}
