<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\NewTaxControlFapiao\FapiaoApplications\_fapiao_apply_id_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface FapiaoFiles
{
    /**
     * 获取发票下载信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/fapiao-files
     */
    public function get(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_id' => '20200701123456',
        ],
    ]): ResponseInterface;

    /**
     * 获取发票下载信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/new-tax-control-fapiao/fapiao-applications/%7Bfapiao_apply_id%7D/fapiao-files
     */
    public function getAsync(array $options = [
        'fapiao_apply_id' => '4200000444201910177461284488',
        'query' => [
            'sub_mchid' => '1900000109',
            'fapiao_id' => '20200701123456',
        ],
    ]): PromiseInterface;
}
