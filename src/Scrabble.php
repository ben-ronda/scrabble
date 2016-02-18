<?php
    class Scrabble{


        function scrabble_score($user_input)
        {
            $user_input = strtolower($user_input);
            $letters = str_split($user_input);
            $output = 0;
            $one = array("a", "e", "i", "o", "u", "l", "n", "r", "s", "t");
            $two = array("d", "g");
            $three = array("b", "c", "m", "p");
            $four = array("f", "h", "v", "w", "y");
            $five = array("k");
            $eight = array("j", "x");
            $ten = array("q", "z");


            foreach($letters as $letter) {
                if (in_array($letter, $one)){
                    $output = $output + 1;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $two)){
                    $output = $output + 2;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $three)){
                    $output = $output + 3;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $four)){
                    $output = $output + 4;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $five)){
                    $output = $output + 5;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $eight)){
                    $output = $output + 8;
                }
            }

            foreach($letters as $letter) {
                if (in_array($letter, $ten)){
                    $output = $output + 10;
                }
            }

            return $output;
        }
    }
?>
