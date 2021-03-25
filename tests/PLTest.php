<?php declare(strict_types = 1);

namespace Test;

use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertEquals;

require_once __DIR__ . '/../src/pl.php';

class PLTest extends TestCase {
    public function testPopularLP(int $fileNumber, $expected)
    {
        $data = file_get_contents(__DIR__ . '../data/responses_$fileNumber.json');

        $responses = json_decode($data, true);

        $this->assertEquals($expected, popular_PL($responses));

    }

    public function dataPopularPl(): array 
    {
        return [
            'response_1'=> [1, 'PHP'],
            'response_2'=> [2, 'JavaScript'],
            'response_3'=> [3, 'C++'],
        ]; 
    }
}