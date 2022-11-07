<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Marketing\Busifavor\Subsidy\PayReceipts;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _subsidy_receipt_id_
{
    /**
     * 查询营销补差付款单详情(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_18.shtml
     */
    public function get(array $options = [
        'subsidy_receipt_id' => '1120200119165100000000000001',
    ]): ResponseInterface;

    /**
     * 查询营销补差付款单详情(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/apis/chapter9_2_18.shtml#async
     */
    public function getAsync(array $options = [
        'subsidy_receipt_id' => '1120200119165100000000000001',
    ]): PromiseInterface;
}
