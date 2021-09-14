<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund\Withdraw\BillType;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 */
interface _bill_type_
{
    /**
     * 按日下载提现异常文件(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_4.shtml
     */
    public function get(array $options = [
        'query' => [
            'bill_type' => '',
            'bill_date' => '',
            'tar_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 按日下载提现异常文件(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_4.shtml#async
     */
    public function getAsync(array $options = [
        'query' => [
            'bill_type' => '',
            'bill_date' => '',
            'tar_type' => '',
        ],
    ]): PromiseInterface;
}
