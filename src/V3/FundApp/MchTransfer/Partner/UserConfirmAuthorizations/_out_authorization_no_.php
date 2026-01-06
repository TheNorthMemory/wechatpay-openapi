<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\FundApp\MchTransfer\Partner\UserConfirmAuthorizations;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_authorization_no_\Close $close
 */
interface _out_authorization_no_
{
    /**
     * 商户单号查询自动收款授权(同步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/user-confirm-authorizations/%7Bout_authorization_no%7D
     */
    public function get(array $options = [
        'out_authorization_no' => 'plfk2020042013',
    ]): ResponseInterface;

    /**
     * 商户单号查询自动收款授权(异步模式)
     * @param array<string,mixed> $options
     * @link https://wechatpay.im/openapi/v3/fund-app/mch-transfer/partner/user-confirm-authorizations/%7Bout_authorization_no%7D
     */
    public function getAsync(array $options = [
        'out_authorization_no' => 'plfk2020042013',
    ]): PromiseInterface;
}
