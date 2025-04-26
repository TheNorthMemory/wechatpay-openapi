<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\BrandRedpacket\BrandMerchantBatches\_batch_no_\Details;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _detail_no_
{
    /**
     * 商家明细单号查询明细单(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches/%7Bbatch_no%7D/details/%7Bdetail_no%7D
     */
    public function get(array $options = [
        'batch_no' => '1030000071100999991182020050700019480001',
        'detail_no' => '1040000071100999991182020050700019500100',
    ]): ResponseInterface;

    /**
     * 商家明细单号查询明细单(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/brand-redpacket/brand-merchant-batches/%7Bbatch_no%7D/details/%7Bdetail_no%7D
     */
    public function getAsync(array $options = [
        'batch_no' => '1030000071100999991182020050700019480001',
        'detail_no' => '1040000071100999991182020050700019500100',
    ]): PromiseInterface;
}
