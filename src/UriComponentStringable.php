<?php declare(strict_types=1);

namespace WeChatPay\OpenAPI;

class UriComponentStringable extends \ArrayObject
{
    public function __toString(): string
    {
        return \urlencode(\http_build_query($this->getArrayCopy()));
    }
}
