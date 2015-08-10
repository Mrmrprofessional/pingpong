<?php
    class PingPongGenerator
    {
        function generateNumbers($input) {
            $counter = 1;
            $pingPongArray = array();

            while($counter <= $input) {
                array_push($pingPongArray, $counter);
                $counter++;
            }

            return $pingPongArray;
        }

        function generatePing($input)
        {
            $counter = 1;
            $pingPongArray = array();

            while($counter <= $input) {
                if ($counter % 3 == 0)
                {
                    array_push($pingPongArray, "ping");
                }
                else
                {
                array_push($pingPongArray, $counter);
                }
                $counter++;
            }

            return $pingPongArray;
        }

        function generatePong($input)
        {
            $counter = 1;
            $pingPongArray = array();

            while($counter <= $input) {
                if ($counter % 5 == 0)
                {
                    array_push($pingPongArray, "pong");
                }
                else
                {
                array_push($pingPongArray, $counter);
                }
                $counter++;
            }

            return $pingPongArray;
        }

        function generatePingPong($input)
        {
            $counter = 1;
            $pingPongArray = array();

            while($counter <= $input) {
                if ($counter % 5 == 0 && $counter % 3 == 0)
                {
                    array_push($pingPongArray, "pingpong");
                }
                elseif ($counter % 5 == 0)
                {
                    array_push($pingPongArray, "pong");
                }
                elseif ($counter % 3 == 0)
                {
                    array_push($pingPongArray, "ping");
                }
                else
                {
                array_push($pingPongArray, $counter);
                }
                $counter++;
            }

            return $pingPongArray;
        }
    }
?>
