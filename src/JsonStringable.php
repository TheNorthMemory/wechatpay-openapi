<?php declare(strict_types=1);

namespace WeChatPay\OpenAPI;

class JsonStringable extends \ArrayObject implements \JsonSerializable
{

    public function jsonSerialize(): array
    {
        return $this->getArrayCopy();
    }

    public function __toString(): string
    {
        return (string) \json_encode($this->jsonSerialize(), \JSON_UNESCAPED_SLASHES | \JSON_UNESCAPED_UNICODE);
    }
}
