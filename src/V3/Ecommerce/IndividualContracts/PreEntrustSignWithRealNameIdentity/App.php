<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\Ecommerce\IndividualContracts\PreEntrustSignWithRealNameIdentity;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface App
{
    /**
     * APP场景预签约（需要实名验证）(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign-with-real-name-identity/app
     */
    public function post(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
            'real_name' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tP',
            'cred_type' => 'ID_CARD',
            'cred_id' => 'MZnwEx6zotwIz6ctW2/iQL5z9',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): ResponseInterface;

    /**
     * APP场景预签约（需要实名验证）(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/ecommerce/individual-contracts/pre-entrust-sign-with-real-name-identity/app
     */
    public function postAsync(array $options = [
        'json' => [
            'appid' => 'wxd678efh567h23787',
            'out_contract_code' => 'APPLYMENT_00000000001',
            'real_name' => 'pVd1HJ6zyvPedzGaV+X3qtmrq9bb9tP',
            'cred_type' => 'ID_CARD',
            'cred_id' => 'MZnwEx6zotwIz6ctW2/iQL5z9',
        ],
        'headers' => [
            'Wechatpay-Serial' => 'PUB_KEY_ID_0114232134912410000000000000',
        ],
    ]): PromiseInterface;
}
