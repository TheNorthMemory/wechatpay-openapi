<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchantfund\Partner;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface IncomeRecords
{
    /**
     * 特约商户银行来账查询(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchantfund/partner/income-records
     */
    public function get(array $options = [
        'query' => [
            'sub_mchid' => '2480253391',
            'account_type' => 'BASIC',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): ResponseInterface;

    /**
     * 特约商户银行来账查询(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/merchantfund/partner/income-records
     */
    public function getAsync(array $options = [
        'query' => [
            'sub_mchid' => '2480253391',
            'account_type' => 'BASIC',
            'offset' => 0,
            'limit' => 100,
        ],
    ]): PromiseInterface;
}
