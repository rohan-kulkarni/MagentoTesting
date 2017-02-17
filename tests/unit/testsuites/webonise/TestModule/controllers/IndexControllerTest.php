<?php
require_once '../../app/code/local/Webonise/TestModule/controllers/IndexController.php';
class Webonise_TestModule_IndexController_IndexControllerTest extends PHPUnit_Framework_TestCase {
    public function setUp() {
        /* You'll have to load Magento app in any test classes in this method */
        $app = Mage::app('default');
        /* You will need a layout for block tests */
        $this->_layout = $app->getLayout();
        /* Let's create the block instance for further tests */
        $this->_controllers = new Webonise_TestModule_IndexController_IndexControllerTest;
    }
    
    /**
    * @dataProvider provider
    */
    public function testIndexAction($data) {
        $index = new Webonise_TestModule_IndexController();
        $this->assertTrue($data);
        $this->assertTrue($index->indexAction());
    }

    public function provider() {
        return['test data' => [true] ];
    }
}
?>
