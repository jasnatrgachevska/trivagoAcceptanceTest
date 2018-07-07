<?php
    use \Codeception\Util\Locator;
    use \Facebook\WebDriver\WebDriverElement;
    use \Codeception\Module;

class SearchDealCest
{

    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
       # $I->closeSession();
    }

    private function searchDeal(AcceptanceTester $I)
    {
        $I->wantTo('look for a deal in Thailand');
        $I->amOnPage('/');
        $I->fillField('//*[@id="horus-querytext"]', 'Thailand');
        $I->waitForElement('//*[@class="btn btn--primary horus-btn-search"]');
        $I->click('//*[@class="btn btn--primary horus-btn-search"]');
        $I->waitForElement('//*[@datetime="2018-07-20"]');
        $I->click('//*[@datetime="2018-07-20"]');
        $I->waitForElement('//*[@datetime="2018-07-30"]');
        $I->click('//*[@datetime="2018-07-30"]');
        $I->click('Doble');
        #$I->waitForElementChange(Locator::contains('button', 'Ver oferta'), function(WebDriverElement $el) {
        #   return $el->isEnabled();
        #}, 100);
        $I->wait(2);
    }

    // tests
    public function seeDeal(AcceptanceTester $I)
    {

        $this->searchDeal($I);
        $I->click('Ver oferta');
        $I->switchToNextTab();
        $I->seeInCurrentUrl('/forward');
        $I->closeTab(1);
    }

    public function filterPrice(AcceptanceTester $I)
    {
        $this->searchDeal($I);
        $I->clickWithLeftButton('//*[@role = "slider"]', -30, 0);
        $filterPriceValue = $I->grabTextFrom('.fl-slider__label--cur');
        $price = explode(' ', $filterPriceValue)[1];
        $I->wait(2);
        foreach($I->grabMultiple('.item__best-price') as &$value){
            $priceToCheck = explode(' ', $value)[0];
            $I->assertLessThanOrEqual($price, $priceToCheck, 'Price in search is bigger');
        }
    }


}
