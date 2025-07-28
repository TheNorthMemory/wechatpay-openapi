<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Sncode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * 查询sn码状态(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/query
     */
    public function post(array $options = [
        'json' => [
            'sn_code_list' => ['9CC0AC186027'],
            'qualification_region_code' => 310100,
        ],
    ]): ResponseInterface;

    /**
     * 查询sn码状态(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/sncode/query
     */
    public function postAsync(array $options = [
        'json' => [
            'sn_code_list' => ['9CC0AC186027'],
            'qualification_region_code' => 310100,
        ],
    ]): PromiseInterface;
}
