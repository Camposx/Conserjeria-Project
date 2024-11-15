<?php 

namespace tests;

use PHPUnit\Framework\TestCase;
use App\Models\Call;


class CallTest extends TestCase{

    public function testIfTestOK(){
        $this->assertEquals(1,1);
    }

    public function test_GetRoom(){
        //given 
        $newCall = new Call(null, "112", "Coment for test 1", null);

        //when
        $resultGetRoom = $newCall->getRoom();

        //then
        $this->assertEquals("112", $resultGetRoom);
    }

    public function test_GetIssue(){
        //given 
        $newCall = new Call(null, "112", "Coment for test 2", null);

        //when
        $resultGetIssue = $newCall->getIssue();

        //then
        $this->assertEquals("Coment for test 2", $resultGetIssue);
    }

}

?>