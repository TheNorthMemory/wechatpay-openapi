<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read SpecialReduction\_out_request_no_ $_out_request_no_
 */
interface SpecialReduction
{
    /**
     * 特殊减额(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/special-reduction
     */
    public function post(array $options = [
        'json' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'reduction_type' => 'JUDICIAL_DEDUCTION',
            'amount' => 1,
            'reason' => '司法案件号：202508080009',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 特殊减额(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/special-reduction
     */
    public function postAsync(array $options = [
        'json' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'reduction_type' => 'JUDICIAL_DEDUCTION',
            'amount' => 1,
            'reason' => '司法案件号：202508080009',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
