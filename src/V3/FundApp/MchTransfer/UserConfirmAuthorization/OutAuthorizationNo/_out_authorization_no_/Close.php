<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\UserConfirmAuthorization\OutAuthorizationNo\_out_authorization_no_;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 */
interface Close
{
    /**
     * 解除免确认收款授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/user-confirm-authorization/out-authorization-no/%7Bout_authorization_no%7D/close
     */
    public function post(array $options = [
        'out_authorization_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 解除免确认收款授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/user-confirm-authorization/out-authorization-no/%7Bout_authorization_no%7D/close
     */
    public function postAsync(array $options = [
        'out_authorization_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
