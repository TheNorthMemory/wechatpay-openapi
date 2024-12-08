<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Platsolution\Ecommerce\Recharges\OutRechargeNo;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_recharge_no_\Close $close
 */
interface _out_recharge_no_
{
    /**
     * 查询二级商户充值结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/out-recharge-no/%7Bout_recharge_no%7D
     */
    public function get(array $options = [
        'out_recharge_no' => 'cz2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): ResponseInterface;

    /**
     * 查询二级商户充值结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/platsolution/ecommerce/recharges/out-recharge-no/%7Bout_recharge_no%7D
     */
    public function getAsync(array $options = [
        'out_recharge_no' => 'cz2020042013',
        'query' => [
            'sub_mchid' => '1900001121',
        ],
    ]): PromiseInterface;
}
