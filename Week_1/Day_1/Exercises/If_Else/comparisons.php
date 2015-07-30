<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
          	// below we are comparing two "types" of variables
            // types include:
            //  - string
            //  - int
            //  - double ex: 45.4
            $varInt = 45;
            $varString = "45";

            // double equals comparison
            if($varInt == $varString){
              echo "I am true when it's double equals";
            } else{
              echo "I am false when it's double equals";
            }

            // triple equals comparison
            if($varInt === $varString){
              echo "I am true when it's triple equals";
            } else{
              echo "I am false when it's triple equals";
            }

          ?>
        </p>
	</body>
</html>