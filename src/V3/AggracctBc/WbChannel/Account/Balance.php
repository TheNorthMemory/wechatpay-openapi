<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\Account;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Balance
{
    /**
     * 查询渠道额度(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/balance
     */
    public function get(array $options = [
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询渠道额度(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/account/balance
     */
    public function getAsync(array $options = [
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
