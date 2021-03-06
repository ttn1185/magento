<?php
/**
 * Copyright © 2013-2017 Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Magento\Payment\Test\Unit\Model\ResourceModel\Grid;

class TypeListTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Payment\Model\ResourceModel\Grid\TypeList
     */
    protected $typesArrayModel;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $helperMock;

    protected function setUp()
    {
        $this->helperMock = $this->getMock('Magento\Payment\Helper\Data', [], [], '', false);
        $this->typesArrayModel = new \Magento\Payment\Model\ResourceModel\Grid\TypeList($this->helperMock);
    }

    public function testToOptionArray()
    {
        $this->helperMock
            ->expects($this->once())
            ->method('getPaymentMethodList')
            ->with(true)
            ->will($this->returnValue(['group data']));
        $this->assertEquals(['group data'], $this->typesArrayModel->toOptionArray());
    }
}
