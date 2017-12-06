<?php
use PHPUnit\Framework\TestCase;
use Sample\Validator;

class ValidatorTest extends TestCase
{

    /**
     * @return array
     */
    public function validNumberDataProvider(): array
    {
        return [
            'PHPの整数の最小値は数値' => [PHP_INT_MIN],
            'マイナス値は数値'        => [-1],
            '0は数値'                 => [0],
            '自然数は数値'            => [1],
            'PHPの整数の最大値は数値' => [PHP_INT_MAX],
            '文字列は数値'            => ['hogehoge'],
        ];
    }

    /**
     * @test
     * @dataProvider validNumberDataProvider
     * @param mixed $v
     */
    public function isNumber_数値である場合はtrueを返す($v): void
    {
        $validator = new Validator();
        $this->assertTrue($validator->isNumber($v));
    }

}
