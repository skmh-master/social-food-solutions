<?php declare(strict_types=1);

namespace SocialFoodSolutions;

use PHPUnit\Framework\TestCase;

class MemoryIngredientSourceTest extends TestCase
{
    public function testHasSource()
    {
        $ingredientSource = new MemoryIngredientSource();
        $ingredientNames  = $ingredientSource->getIngredientNames();

        $expectedIngredientNames = [
            IngredientName::from('Apfel'),
            IngredientName::from('Birne'),
            IngredientName::from('Banane'),
        ];

        $this->assertEquals($expectedIngredientNames, $ingredientNames);
    }
}