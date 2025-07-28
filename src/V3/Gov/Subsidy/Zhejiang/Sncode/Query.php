<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Sncode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Query
{
    /**
     * sn码销售状态查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/sncode/query
     */
    public function post(array $options = [
        'json' => [
            'sn' => '',
            'province' => '',
            'manufact_cert_code' => '',
            'goods_type' => '',
            'goods_bar_code' => '',
            'imei1' => '',
            'imei2' => '',
            'sales_models' => '',
            'req_ssn' => '',
            'req_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * sn码销售状态查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/sncode/query
     */
    public function postAsync(array $options = [
        'json' => [
            'sn' => '',
            'province' => '',
            'manufact_cert_code' => '',
            'goods_type' => '',
            'goods_bar_code' => '',
            'imei1' => '',
            'imei2' => '',
            'sales_models' => '',
            'req_ssn' => '',
            'req_time' => '',
        ],
    ]): PromiseInterface;
}
