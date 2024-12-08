<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransferDetail;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface ElectronicReceipts
{
    /**
     * 转账明细电子回单受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer-detail/electronic-receipts
     */
    public function post(array $options = [
        'json' => [
            'accept_type' => 'BATCH_TRANSFER',
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
            'out_detail_no' => 'mx0911231610162610v4CNkO4HAf',
        ],
    ]): ResponseInterface;

    /**
     * 转账明细电子回单受理(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer-detail/electronic-receipts
     */
    public function postAsync(array $options = [
        'json' => [
            'accept_type' => 'BATCH_TRANSFER',
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
            'out_detail_no' => 'mx0911231610162610v4CNkO4HAf',
        ],
    ]): PromiseInterface;

    /**
     * 查询转账明细电子回单受理结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer-detail/electronic-receipts#get
     */
    public function get(array $options = [
        'query' => [
            'accept_type' => 'BATCH_TRANSFER',
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
            'out_detail_no' => 'mx0911231610162610v4CNkO4HAf',
        ],
    ]): ResponseInterface;

    /**
     * 查询转账明细电子回单受理结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/transfer-detail/electronic-receipts#get
     */
    public function getAsync(array $options = [
        'query' => [
            'accept_type' => 'BATCH_TRANSFER',
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
            'out_detail_no' => 'mx0911231610162610v4CNkO4HAf',
        ],
    ]): PromiseInterface;
}
