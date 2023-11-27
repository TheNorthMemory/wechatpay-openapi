<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantRiskManage;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface TradeRiskInformation
{
    /**
     * 查询风险信息(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/risk-manage/trade-risk/query-trade-risk-information.html
     */
    public function get(array $options = [
        'query' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'complaints_information' => '商家说高额返利，支付很大金额之后发现并没有返利，是骗子',
        ],
    ]): ResponseInterface;

    /**
     * 查询风险信息(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/partner/apis/risk-manage/trade-risk/query-trade-risk-information.html#async
     */
    public function getAsync(array $options = [
        'query' => [
            'sp_mchid' => '1900000109',
            'acquiring_bank_id' => '1356485',
            'channel_id' => '1900000108',
            'sub_mchid' => '1900009231',
            'out_trade_no' => '1217752501201407033233368018',
            'complaints_information' => '商家说高额返利，支付很大金额之后发现并没有返利，是骗子',
        ],
    ]): PromiseInterface;
}
