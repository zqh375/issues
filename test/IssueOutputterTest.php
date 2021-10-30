<?php


class IssueOutputterTest extends PHPUnit_Framework_TestCase
{

    public function testOutput()
    {
        ob_start();
        $outputer=new \Zqh\Hello\IssueOutputter();
        $issue=['title'=>'Test Issue'];
        $outputer->output($issue);
        $result=ob_get_contents();
        ob_end_clean();
        $this->assertEquals("Issue Test Issue\n",$result);
    }

}