<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\Fund;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Withdraw\OutRequestNo $outRequestNo
 * @property-read Withdraw\_withdraw_id_ $_withdraw_id_
 */
interface Withdraw
{
    /**
     * 账户余额提现(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_2.shtml
     */
    public function post(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => '20190611222222222200000000012122',
            'amount' => 100,
            'remark' => '交易提现',
            'bank_memo' => '微信支付提现',
            'account_type' => 'BASIC',
        ],
    ]): ResponseInterface;

    /**
     * 账户余额提现(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3/wxpay/ecommerce/fund/chapter3_2.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'sub_mchid' => '1900000109',
            'out_request_no' => '20190611222222222200000000012122',
            'amount' => 100,
            'remark' => '交易提现',
            'bank_memo' => '微信支付提现',
            'account_type' => 'BASIC',
        ],
    ]): PromiseInterface;
}
