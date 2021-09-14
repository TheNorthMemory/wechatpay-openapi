<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * 这是一个纯接口描述文件，由程序自动生成，旨在为IDE提供结构提示，无他用。
 * @property-read Withdraw\WithdrawId $withdrawId
 * @property-read Withdraw\OutRequestNo $outRequestNo
 * @property-read Withdraw\BillType $billType
 */
interface Withdraw
{
    /**
     * 电商平台提现(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_5.shtml
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => '',
            'amount' => 0,
            'remark' => '',
            'bank_memo' => '',
            'account_type' => '',
        ],
    ]): ResponseInterface;

    /**
     * 电商平台提现(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_5.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '',
            'amount' => 0,
            'remark' => '',
            'bank_memo' => '',
            'account_type' => '',
        ],
    ]): PromiseInterface;
}
