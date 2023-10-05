<?php

class DiscountCalculatorTest implements UnitaryInterface
{
    public function ShouldAplly_WhenValueIsAboveTheMinimum()
    {
        $discountCalculator = new DiscountCalculator;

        $totalValue = 130;
        $totalWithDiscount = $discountCalculator->aplly($totalValue);

        $expectedValue = 110;
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    public function ShouldNotAplly_WhenValueIsBellowTheMinimum()
    {
        $discountCalculator = new DiscountCalculator;

        $totalValue = 90;
        $totalWithDiscount = $discountCalculator->aplly($totalValue);

        $expectedValue = 90;
        $this->assertEquals($expectedValue, $totalWithDiscount);
    }

    public function assertEquals($expectedValue, $actualValue)
    {
        if ($expectedValue !== $actualValue) {
            throw new Exception("expected $expectedValue but got: $actualValue");
        }

        echo "Test passed!" . PHP_EOL;
    }

    public function execute()
    {
        $this->ShouldAplly_WhenValueIsAboveTheMinimum();
        $this->ShouldNotAplly_WhenValueIsBellowTheMinimum();
    }
}
