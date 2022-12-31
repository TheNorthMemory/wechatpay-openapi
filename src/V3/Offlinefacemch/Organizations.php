<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Offlinefacemch;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Organizations\_organization_id_ $_organization_id_
 */
interface Organizations
{
    /**
     * 查询机构信息接口(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html
     */
    public function get(array $options = [
        'query' => [
            'organization_id' => 'DBES323aeb',
            'organization_name' => '南山中兴小学部',
        ],
    ]): ResponseInterface;

    /**
     * 查询机构信息接口(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/wxfacepay/develop/k12-development-guidelines.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'organization_id' => 'DBES323aeb',
            'organization_name' => '南山中兴小学部',
        ],
    ]): PromiseInterface;
}
