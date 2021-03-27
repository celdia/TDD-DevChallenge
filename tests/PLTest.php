<?php declare(strict_types = 1);

namespace Test;

use PHPUnit\Framework\TestCase;


require __DIR__ . '/../src/pl.php';

class PLTest extends TestCase 
{
    public function testPopularPL(int $fileNumber, string $expected): string
    {
        
        $data = file_get_contents(__DIR__ . "/../data/responses-$fileNumber.json");               

        $responses = json_decode($data, true);

        $this->assertEquals($expected, popular_PL($responses));

    }

    public function dataPopularPL(): array 
    {
        return [
            'responses-1'=> [1, 'PHP'],
            'responses-2'=> [2, 'JavaScript'],
            'responses-3'=> [3, 'C++'],
        ]; 
    }
}