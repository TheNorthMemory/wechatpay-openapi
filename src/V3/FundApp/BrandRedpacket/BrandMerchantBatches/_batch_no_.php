<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\BrandRedpacket\BrandMerchantBatches;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _batch_no_\Details $details
 */
interface _batch_no_
{
    /**
     * 微信支付批次单号查询批次单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches/%7Bbatch_no%7D
     */
    public function get(array $options = [
        'batch_no' => '1030000071100999991182020050700019480001',
        'query' => [
            'need_query_detail' => true,
            'detail_state' => 'DETAIL_VIEW_ALL | DETAIL_VIEW_SUCCESS | DETAIL_VIEW_FAIL',
        ],
    ]): ResponseInterface;

    /**
     * 微信支付批次单号查询批次单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches/%7Bbatch_no%7D
     */
    public function getAsync(array $options = [
        'batch_no' => '1030000071100999991182020050700019480001',
        'query' => [
            'need_query_detail' => true,
            'detail_state' => 'DETAIL_VIEW_ALL | DETAIL_VIEW_SUCCESS | DETAIL_VIEW_FAIL',
        ],
    ]): PromiseInterface;
}
