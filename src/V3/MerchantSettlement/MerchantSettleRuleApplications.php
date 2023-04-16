<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\MerchantSettlement;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read MerchantSettleRuleApplications\_application_id_ $_application_id_
 */
interface MerchantSettleRuleApplications
{
    /**
     * 申请修改特约商户结算规则(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_1_1.shtml
     */
    public function post(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'channel_id' => '20001111',
            'sub_mchid' => '1346578',
            'settle_rule_id' => 760,
        ],
    ]): ResponseInterface;

    /**
     * 申请修改特约商户结算规则(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/wiki/doc/apiv3_partner/Offline/apis/chapter3_1_1.shtml#async
     */
    public function postAsync(array $options = [
        'json' => [
            'acquiring_bank_id' => '1356485',
            'channel_id' => '20001111',
            'sub_mchid' => '1346578',
            'settle_rule_id' => 760,
        ],
    ]): PromiseInterface;
}
