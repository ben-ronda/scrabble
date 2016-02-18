<?php
    require_once "src/Scrabble.php";

    class ScrabbleTest extends PHPUnit_Framework_TestCase
    {
        function test_onePoint()
        {
            $test_Scrabble = new Scrabble;
            $input = "a";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(1, $result);
        }

        function test_twoPoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "d";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(2, $result);
        }

        function test_threePoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "b";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(3, $result);
        }

        function test_fourPoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "f";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(4, $result);
        }

        function test_fivePoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "k";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(5, $result);
        }

        function test_eightPoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "j";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(8, $result);
        }

        function test_tenPoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "z";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(10, $result);
        }

        function test_multiplePoints()
        {
            $test_Scrabble = new Scrabble;
            $input = "wordz";

            $result = $test_Scrabble->scrabble_score($input);

            $this->assertEquals(18, $result);
        }

    }

?>
