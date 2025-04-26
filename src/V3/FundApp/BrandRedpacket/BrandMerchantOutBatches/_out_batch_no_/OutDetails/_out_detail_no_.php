<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\BrandRedpacket\BrandMerchantOutBatches\_out_batch_no_\OutDetails;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_detail_no_
{
    /**
     * 商家明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-out-batches/%7Bout_batch_no%7D/out-details/%7Bout_detail_no%7D
     */
    public function get(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): ResponseInterface;

    /**
     * 商家明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-out-batches/%7Bout_batch_no%7D/out-details/%7Bout_detail_no%7D
     */
    public function getAsync(array $options = [
        'out_batch_no' => 'plfk2020042013',
        'out_detail_no' => 'x23zy545Bd5436',
    ]): PromiseInterface;
}
