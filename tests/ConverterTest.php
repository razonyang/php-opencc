<?php

namespace RazonYang\Opencc\Tests;

use PHPUnit\Framework\TestCase;
use RazonYang\OpenCC\Config;
use RazonYang\OpenCC\Converter;
use RazonYang\OpenCC\Exception\InvalidConfigException;

final class ConverterTest extends TestCase
{

    public function convertProvider(): array
    {
        return [
            [
                Config::S2T,
                true,
                [
                    ['', ''],
                    ['你干什么不干我事', '你幹什麼不干我事'],
                    ['我鼠标哪儿去了', '我鼠標哪兒去了'],
                ],
            ],
            [
                Config::T2S,
                true,
                [
                    ['', ''],
                    ['你幹什麼不干我事', '你干什么不干我事'],
                    ['我鼠標哪兒去了', '我鼠标哪儿去了'],
                ],
            ],
            [
                Config::S2TWP,
                true,
                [
                    ['', ''],
                    ['你干什么不干我事', '你幹什麼不干我事'],
                    ['我鼠标哪儿去了', '我滑鼠哪兒去了'],
                ],
            ],
            [
                "invalid.json",
                false,
                [],
            ],
        ];
    }

    /**
     * @dataProvider convertProvider
     */
    public function testConvert($config, $valid, $cases): void
    {
        if (!$valid) {
            $this->expectException(InvalidConfigException::class);
        }
        $converter = new Converter($config);
        foreach ($cases as $case) {
            $this->assertEquals($case[1], $converter->convert($case[0]));
        }
    }

    public function testClose(): void
    {
        $converter = new Converter(Config::S2T);
        $this->assertTrue($converter->close());
    }
}
