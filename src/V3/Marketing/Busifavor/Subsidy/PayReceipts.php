<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Subsidy;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read PayReceipts\_subsidy_receipt_id_ $_subsidy_receipt_id_
 */
interface PayReceipts
{
    /**
     * 营销补差付款(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_16.shtml
     */
    public function post(array $options = [
        'json' => [
            'stock_id' => '128888000000001',
            'coupon_code' => 'ABCD12345678',
            'transaction_id' => '4200000913202101152566792388',
            'payer_merchant' => '1900000001',
            'payee_merchant' => '1900000002',
            'amount' => 100,
            'description' => '20210115DESCRIPTION',
            'out_subsidy_no' => 'subsidy-abcd-12345678',
        ],
    ]): ResponseInterface;

    /**
     * 营销补差付款(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_16.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'stock_id' => '128888000000001',
            'coupon_code' => 'ABCD12345678',
            'transaction_id' => '4200000913202101152566792388',
            'payer_merchant' => '1900000001',
            'payee_merchant' => '1900000002',
            'amount' => 100,
            'description' => '20210115DESCRIPTION',
            'out_subsidy_no' => 'subsidy-abcd-12345678',
        ],
    ]): PromiseInterface;

    /**
     * 查询营销补差付款单列表(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_19.shtml
     */
    public function get(array $options = [
        'query' => [
            'stock_id' => '128888000000001',
            'coupon_code' => 'ABCD12345678',
            'out_subsidy_no' => 'subsidy-abcd-12345678',
        ],
    ]): ResponseInterface;

    /**
     * 查询营销补差付款单列表(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_19.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'stock_id' => '128888000000001',
            'coupon_code' => 'ABCD12345678',
            'out_subsidy_no' => 'subsidy-abcd-12345678',
        ],
    ]): PromiseInterface;
}
