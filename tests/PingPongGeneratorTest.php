<?php

    require_once "src/PingPongGenerator.php";

    class PingPongGeneratorTest extends PHPUnit_Framework_TestCase
    {

        function test_generatePingPong_printNumbers()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 10;

            //Act
            $result = $test_PingPongGenerator->generateNumbers($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,5,6,7,8,9,10), $result);

        }

        function test_generatePingPong_printPing()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 3;

            //Act
            $result = $test_PingPongGenerator->generatePing($input);

            //Assert
            $this->assertEquals(array(1,2,"ping"), $result);

        }

        function test_generatePingPong_printPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 5;

            //Act
            $result = $test_PingPongGenerator->generatePong($input);

            //Assert
            $this->assertEquals(array(1,2,3,4,"pong"), $result);

        }

        function test_generatePingPong_printPingPong()
        {
            $test_PingPongGenerator = new PingPongGenerator;
            $input = 15;

            //Act
            $result = $test_PingPongGenerator->generatePingPong($input);

            //Assert
            $this->assertEquals(array(1,2,"ping",4,"pong","ping",7,8,"ping","pong",11,"ping",13,14,"pingpong"), $result);

        }
    }


 ?>
