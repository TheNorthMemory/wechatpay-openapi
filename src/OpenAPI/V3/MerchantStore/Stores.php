<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantStore;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Stores\_store_id_ $_store_id_
 */
interface Stores
{
    /**
     * 创建门店(同步模式)
     * @param array<string,mixed> $options
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [],
            'store_address' => [],
            'store_business' => [],
            'store_recipient' => [],
        ],
    ]): ResponseInterface;

    /**
     * 创建门店(异步模式)
     * @param array<string,mixed> $options
     * @link #async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'store_basics' => [],
            'store_address' => [],
            'store_business' => [],
            'store_recipient' => [],
        ],
    ]): PromiseInterface;
}
