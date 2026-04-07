<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\BankChannelAccount;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read Rename\_application_id_ $_application_id_
 */
interface Rename
{
    /**
     * 受理渠道结算银行账户更名申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/bank-channel-account/rename
     */
    public function post(array $options = [
        'json' => [
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
            'change_scene' => 'SUBJECT_INFO_RENAME',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 受理渠道结算银行账户更名申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/bank-channel-account/rename
     */
    public function postAsync(array $options = [
        'json' => [
            'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
            'change_scene' => 'SUBJECT_INFO_RENAME',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
