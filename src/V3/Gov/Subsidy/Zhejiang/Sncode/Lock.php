<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Gov\Subsidy\Zhejiang\Sncode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Lock
{
    /**
     * sn码锁定(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/sncode/lock
     */
    public function post(array $options = [
        'json' => [
            'create_user' => '',
            'province' => '',
            'manufact_cert_code' => '',
            'sn' => '',
            'goods_bar_code' => '',
            'goods_type' => '',
            'goods_name' => '',
            'goods_model' => '',
            'imei1' => '',
            'imei2' => '',
            'trans_orderid' => '',
            'order_price' => '',
            'acquire_code' => '',
            'sell_orderid' => '',
            'city' => '',
            'county' => '',
            'is_ai_product' => '',
            'sale_time' => '',
            'mfr_info' => '',
            'brand' => '',
            'sale_models' => '',
            'req_ssn' => '',
            'req_time' => '',
        ],
    ]): ResponseInterface;

    /**
     * sn码锁定(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/gov/subsidy/zhejiang/sncode/lock
     */
    public function postAsync(array $options = [
        'json' => [
            'create_user' => '',
            'province' => '',
            'manufact_cert_code' => '',
            'sn' => '',
            'goods_bar_code' => '',
            'goods_type' => '',
            'goods_name' => '',
            'goods_model' => '',
            'imei1' => '',
            'imei2' => '',
            'trans_orderid' => '',
            'order_price' => '',
            'acquire_code' => '',
            'sell_orderid' => '',
            'city' => '',
            'county' => '',
            'is_ai_product' => '',
            'sale_time' => '',
            'mfr_info' => '',
            'brand' => '',
            'sale_models' => '',
            'req_ssn' => '',
            'req_time' => '',
        ],
    ]): PromiseInterface;
}
