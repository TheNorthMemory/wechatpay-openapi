<?php declare(strict_types=1);/* Generated file. DO NOT EDIT! */

namespace WeChatPay\OpenAPI\V3\PasswordExemptContract\Contracts\ServiceId\_service_id_\OutContractCode;

use Psr\Http\Message\ResponseInterface;
use GuzzleHttp\Promise\PromiseInterface;

/**
 * @property-read _out_contract_code_\Terminate $terminate
 */
interface _out_contract_code_
{
    /**
     * 商户通过商户协议号查询协议(同步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/password-free-contract/contracts/get-by-code.html
     */
    public function get(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'service_id' => '12535',
    ]): ResponseInterface;

    /**
     * 商户通过商户协议号查询协议(异步模式)
     * @param array<string,mixed> $options
     * @link https://pay.weixin.qq.com/docs/merchant/apis/password-free-contract/contracts/get-by-code.html#async
     */
    public function getAsync(array $options = [
        'out_contract_code' => 'wxwtdk20200910100000',
        'service_id' => '12535',
    ]): PromiseInterface;
}
