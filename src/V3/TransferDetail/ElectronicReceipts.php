<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\TransferDetail;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface ElectronicReceipts
{
    /**
     * 转账明细电子回单受理(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_4.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_4.shtml#async
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_5.shtml
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
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/pay/transfer_partner/chapter4_5.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'accept_type' => 'BATCH_TRANSFER',
            'out_batch_no' => 'GD2021011610162610BBdkkIwcu3',
            'out_detail_no' => 'mx0911231610162610v4CNkO4HAf',
        ],
    ]): PromiseInterface;
}
