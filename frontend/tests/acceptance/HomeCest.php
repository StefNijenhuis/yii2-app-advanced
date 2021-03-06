<?php
namespace frontend\tests\acceptance;

use frontend\tests\AcceptanceTester;
use yii\helpers\Url;

class HomeCest
{
    public function checkHome(AcceptanceTester $I)
    {
        $I->wait(1);
        $I->amOnPage(Url::to('/site/index'));
        $I->see('My Company');
    }
}
