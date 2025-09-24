<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\AggracctBc\WbChannel\SpecialReduction;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface _out_request_no_
{
    /**
     * 查询特殊减额结果(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/special-reduction/%7Bout_request_no%7D
     */
    public function get(array $options = [
        'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * 查询特殊减额结果(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/aggracct-bc/wb-channel/special-reduction/%7Bout_request_no%7D
     */
    public function getAsync(array $options = [
        'out_request_no' => 'htozr8denqegbt6tk6u10iymo7yww5pn',
        'query' => [
            'mchid' => '1900016681',
            'bal_account_no' => '8609cb22e1774a50a930e414cc71eca06121bc',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
