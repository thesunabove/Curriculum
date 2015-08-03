<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
    <p>
      <?php
        /*
        * given the array of months - display all months that begin with J
        */

        $monthArray = array(
            'January',
            'February',
            'March',
            'April',
            'May',
            'June',


        )

      switch (3) {
        // fruits
        case '1':
        case '2':
        case '3':
        case '4':
          echo "I am between 1 - 4";
        case '5':
        case '6':
        case '7':
        case '8':
          echo "I am between 5 - 8";
        default:
          echo "I am greater than 8";
      }

      ?>
    </p>
	</body>
</html>