<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Merchant\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
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
            'out_request_no' => '20190611222222222200000000012122',
            'amount' => 1,
            'remark' => '交易体现',
            'bank_memo' => 'xx平台提现',
            'account_type' => 'BASIC | OPERATION | FEES',
        ],
    ]): ResponseInterface;

    /**
     * 电商平台提现(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_5.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => '20190611222222222200000000012122',
            'amount' => 1,
            'remark' => '交易体现',
            'bank_memo' => 'xx平台提现',
            'account_type' => 'BASIC | OPERATION | FEES',
        ],
    ]): PromiseInterface;
}
