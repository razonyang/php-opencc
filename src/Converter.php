<?php

namespace RazonYang\OpenCC;

use RazonYang\OpenCC\Exception\InvalidConfigException;

class Converter
{
    private $od;

    /**
     * @throws InvalidConfigException if the config is invalid.
     */
    public function __construct(string $config)
    {
        $od = opencc_open($config);
        if ($od === false) {
            throw new InvalidConfigException("invalid OpenCC config: $config");
        }
        $this->od = $od;
    }

    public function convert(string $input): string
    {
        $output = opencc_convert($input, $this->od);
        return $output;
    }

    public function close(): bool
    {
        return opencc_close($this->od);
    }
}
