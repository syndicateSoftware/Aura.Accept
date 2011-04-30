<?php
namespace aura\web;

/**
 * Test class for Transfer.
 * Generated by PHPUnit on 2011-03-19 at 15:01:01.
 */
class TransferTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var Transfer
     */
    protected $transfer;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->transfer = new Transfer;
    }
    
    /**
     * @todo Implement test__get().
     */
    public function test__setAndGet()
    {
        $this->transfer->content = 'Body Content';
        $this->assertSame('Body Content', $this->transfer->content);
        
        $this->transfer->cookies['cookie_key'] = 'cookie_val';
        $this->assertType('\ArrayObject', $this->transfer->cookies);
        $this->assertSame('cookie_val', $this->transfer->cookies['cookie_key']);
        
        $this->transfer->data['data_key'] = 'data_val';
        $this->assertType('\ArrayObject', $this->transfer->data);
        $this->assertSame('data_val', $this->transfer->data['data_key']);
        
        $this->transfer->format = '.json';
        $this->assertSame('.json', $this->transfer->format);
        
        $this->transfer->headers['header_key'] = 'header_val';
        $this->assertType('\ArrayObject', $this->transfer->headers);
        $this->assertSame('header_val', $this->transfer->headers['header_key']);
        
        $this->transfer->layout = 'default_layout';
        $this->assertSame('default_layout', $this->transfer->layout);
        
        $this->transfer->layout_content_var = 'var_name';
        $this->assertSame('var_name', $this->transfer->layout_content_var);
        
        $this->transfer->status_code = 404;
        $this->assertSame(404, $this->transfer->status_code);
        
        $this->transfer->status_text = 'Not Found';
        $this->assertSame('Not Found', $this->transfer->status_text);
        
        $this->transfer->view = 'actionView';
        $this->assertSame('actionView', $this->transfer->view);
    }
}