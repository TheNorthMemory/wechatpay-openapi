<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\BankChannelAccount\Rename;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _application_id_
{
    /**
     * 查询渠道结算银行账户更名申请(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/bank-channel-account/rename/%7Bapplication_id%7D
     */
    public function get(array $options = [
        'application_id' => '11117742499090086455469010028373',
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询渠道结算银行账户更名申请(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/bank-channel-account/rename/%7Bapplication_id%7D
     */
    public function getAsync(array $options = [
        'application_id' => '11117742499090086455469010028373',
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
