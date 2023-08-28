<?php
include('../php/rolUser.php');
require '../php/database.php';

$emailsesion = $_SESSION['correo'];

$idpropietario = "SELECT  id_propietario  FROM tbl_propietario WHERE email = '$emailsesion'";
$respropietario = mysqli_query($conn, $idpropietario);
$row = mysqli_fetch_array($respropietario);

$saldo = "SELECT  saldo  FROM tbl_saldo WHERE id_propietario = ' $row[0]'";
$resaldo = mysqli_query($conn, $saldo);
$row1 = mysqli_fetch_array($resaldo);

?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styleUser.css">
    <link rel="stylesheet" href="../css/cards.css">
</head>

<body style="font-family:Verdana;color:#aaaaaa;">

    <div>
        <?php
        require '../layout/headerUser.php'
        ?>
    </div><br><br><br><br><br>

    <div style="overflow:auto">

        <div class="right">
            <h4>Available Balance</h4>
            <p class="card-text">$<?php echo $row1[0]  ?></p>
            <br><br>

            <div>
                <h4>Last Post </h4>
                <?php


                $query = "SELECT  * FROM tbl_publicacion ORDER BY id_publicacion DESC";
                $publi = mysqli_query($conn, $query);
                $row2 = mysqli_fetch_array($publi);

                ?>
                <p class="card-text"><?php echo $row2['fecha']  ?></p>
                <p class="card-text"><?php echo $row2['mensaje']  ?></p>



                </p>
            </div>
        </div><br>

        <div class="menu">
            <a href="registroReporte.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Report to Admin</h4>

                    </div>
                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAD2UlEQVRoge2ZXYhVVRiG329GpcafZoxCMScrs7IiCorERIwgLzQv6sIaKFAKhroJwotoaPqxn6mcGZJEqdskwUApQgTBoi5C6kIaQRDKwgybzMzKnHy6ON90tjPn7LPWOmfOrpgXNpy91/eu86z1nb33t9aRJjWp/6aAh4C1RXPUJeA24C8/7iiaJ0mAAZ9Q1meAFc0VLaDLB3DcD4CuormiBLQB3zj8OmC9f/4OmF40X7CAFxz8C6DFj8/92vNF8wUJmA+ccehlmetLgPPAb8CCIhmDBOzwQbxboW27t71XBFuwgKWZWb+yQvsVwK8+mOVFMNaU3wcHHPLZnLhej/kSaG0mY5CAxxzw27wnE3Ax8LXHPtpMxpoCZgHfO1zNcgR40GN/ANqbwRgk4I3YtzfwsXten2i+IAELgT8o1VO3R/hudc+fwHUTyRgK9KHP7NsJ3nfc+8FEsMWArHSQU8CcCu3TgA4/plVon+NegJXNoR4PMRU45BAbqsT0UFZPlZgN3n4ImJrK05JqlPSEpOslHZE0WCWmtcrnrAYkHfa+Hq+DJ17AbGDYZ/K+nLjeTEZ6c+LWeMxJ4LIUptSMvCRptqR9ZrY7sY9/ZGa7JO2R1C6pOdUxcCNwDhgBbq4RG5QRj13sj+IR4JZYrpSMbJY0RdJbZnYwwV9RZjYkaatK99Lm0BdrkoAHfHZ/Ai4NiA/OiMd3ACc8/v4YtuCMABdJ6vPTHjMbjvmiEJnZSUnP+ekmoC3UG/PTekrSVZKGJG2L8MVqi6SDkjolPdnQnoF5wGlP+b0RvqifVsZ3t3vOAJ0hntCMvCJphqRdZrYnFChVZrZP0m5JbZJebEinwJ2Ulq9ngUWR3qSMuPcaSlX1eeCuWvG5GfFH4KAkk9RvZodjYOqRmY2WPiZpAEgvp4BHfDaPA5ck+JMz4v6ZwDH3P5wXW3WUwAyVShFJetrMTsWCSBqp8jlIZnZa0jN++rIzxQnY6DNxIDWtlEr90fVIUonOhbszG2PNVwO/+422rLZjYkV5l/IscG2M8X2fgXG7hUWJ8i7lzlDDitiXUU5fr2Zu9r7ajty+OinvKa8Y294yJrhVpRWbJPWZ2dF6vlxSdp2evIyVJGd5zU/fBKZUDQa6fcRHiSjYcvrrz2SkvwH9tTkbQHe1oGwJ3ZA/L4EFwD1+jNvUTuxzrTOeADoqBQx6wKf8y//rA/Y768DYhhsoLTOjdguLEuVdynPATdmGj3yE0buFRYnyLuXe0Qur/cIvwNyC+YIFXA787OyrDPhK0uKiwerUUIukhq+9C9CPRQNM6n+rvwGuu1J/19EGWAAAAABJRU5ErkJggg==" alt="" class="imag">
                    </div>



                </div>
            </a>
            <a href="readReportesUser.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Previously reports</h4>

                    </div>
                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAACU0lEQVRoge2YsY7TQBCG/0lIRdpDQoKOAsSdKHgCkDiJ5nJFHgPuUB4ivALiKTiJmooOaCCI6FpAPAAgcUHku8ITnVGwYzvetZH8N2vveGf28653Zy11apcszwgQMPZc0n0z+1aHs14dTirqpqRXwNXgkXCF8uv6FBwmAsiHVHml7jhrAUP5BXaA98FHJjSIX4eHiQHi92FhYoF4XTiYmCBeHwYmNojb6odpAsTt9cI0BeLPlIIplGuZWe5zZVXx5czMbC/L+D+B5PbjUvXuVFfZF1MEvMnst1Z1IG1TB9I2dSBtUwfSNnUgbVMjuVYF3ZC0W7l1qPNICLVqRICBpJGkQ0l3JV2XhKQvkt5JeiHpxMx+l3UcbUSAEXDKZp0Co7LOg4MAPeBpqqMz4DGwl6rb9bqZ3y+BKVBssYoEsoL45Z3tpWx/xQf6wBFw5qZp0SBBQXw6LR3iQdH4wD6w8LYHRQIFAwEGqW/iUdn4wHHqmxlsChYSZOzuP2bN9Q0gfW8LMG5yZz/08pmZLcs2NrM/kp77bf4qFnhE5u7+VtX4XKxs80b+a7nv75KGkoZm9jMvfgH9aHJqrTqZ14fXJX1lWONMrdtb+LizmlpNjshbL/e38HHPyze5T0VcfvsV2vdJ/tIDjDc9HGtDPKrQftKKDdH9r1KUBf9IUXLaPSTJt8qlKAH0FdjxGFOvW5CkHZlnJJLpNKFq0hhILwEjSeOnJG8Xkm9mQpK6D4HLfv2Ei5WuXBofU8ABxQ9Wa9Op9h17G7F+1L3mps9KjronyjjqngMPTMO0G6cE7gAAAABJRU5ErkJggg==" alt="" class="imag">
                    </div>


                </div>
            </a>


        </div>


        <div class="main">
            <div class="menu">
                <a href="post.php">
                    <div class="card">

                        <div class="top-row background-top-row">
                            <h4>Previous Posts</h4>

                        </div>
                        <div class="content">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAABn0lEQVRoge2Xvy4EURTGvyO6tW+gUIgSUaNBpd9K7SF4C15ieQINIh5AoqGgWgUFEX9aP8XejbGZ3b13LDMm55dsNjsz33fPt+fe3DuS4ziO4zj1wYqIgA1JLUkrkqYlNcZZVIZ3SR1J55IOzOx4LK7AHHBGeZwCsz8NsQo8BcN7YAdYABrhswjshnsAj8DSD8cc5Ltc1HAuE6INTA15tgkcZAadKZxkuG96Z/iaTm1g5LoCDDgMmqNClY/2PUkVb2Sm08BO5OiawEPQriRXHee71rs+EaFthe89M3uLHdDMXiXth59b8aUm+baGPfsN4Dqkn08dNCxUgMuce5vAHXCT/WcTfa9SRC9BFD2tMtpm0D7n3OuQSI7vS+9azMJFksys6OaZqwc66m6m0WQ9+n1j1shvsS3pTtKtpHXLIcWstI6kaHtUtSNjpTZBJssuYBgp07E2HfEgVcODVA0PUjVG7iNFjyZ/TW06YlL3XVjShaSFcstJp//QaJI+yiunMOeljZzztkf/cb0ItVkjHqRqeJCq4UGqhgdxHOd/8QlDgiPxJVgt2gAAAABJRU5ErkJggg==" alt="" class="imag">
                        </div>


                    </div>
                </a>
                <a href="../pago/pay.php">
                    <div class="card">

                        <div class="top-row background-top-row">
                            <h4>Pay</h4>

                        </div>
                        <div class="content">
                            <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAAFM0lEQVR4nO2ZeWxVVRDGb0tFBRcExJJURRSXf0QRMCpSA0YjibgXYmQx4B6JSwxuRCSiJhqRRIkrEoIRdwQ1mkhcUeIWLdioMeKCdQcFBUXozwz9Tjs9ve/1tb2tr5Hvn5c7Z+45M+eeM/PNvCTZgR1oBqAceAzYJ+nKAJZRj5+AM5KuCOACOfEPjZgP7JF0FQADgQ0y/mxgIrBRz18BJyTFDqAUeF1GL3DyAcAbktcBc4Gdk2IFcKOM/RbYKxrrBkwH/pbOauDIpNhgRsnIbcCoPHqHA9VyZgsw05xMigF2TIBVMm5OAfq7ALfLacPbwEGdY21+w+6WQTXArnn0+gF93PPJwHd693dgcqcZnWLcaF1gOyZD8+iNB7YCm4FKJ+8DPOHC9NNA305zQEb00sU23NSC7svO2PtSxicAv2n8e2BMhxofLf6oFn4XKAMqgKOAQ+w50p2sO2EBYXSO+Qa4HPRcZzkxzuWFBcA3NMUm4ElghHtnX7sneeac5mhNx3M0YBjwK82xFngf+FT3IWAh0LOFOQ+V84bTO8rwHsCpdrbdnfD4ADgmemdv4HpHT0ynV475dwLek978rI3fD7gEeMHtVBo+y0cGgYP1hQwvASUpOjdrfE1mxBI4AFgSGVunHTMGG/CLfqcUMGcFUCv9idHYcLFkCwQjs3QiJKg/gGeBqUD/qMZYrLtgGFLg3OOlvzo6svZFDXdkyVxXaNJX7IxH41UaW6fqL+gWRMupJ43hqwyU7B49V2fGhl3oWxtfSmOySlKGqZI9oOeZeu5v96qFNZbqnTHASTqyllcGZ+XEABddxqaMP6ix18JlBU6R7AclxICvraDKsc4S6UzQhhmmZ+VEiaMPi1PGK7Vzf1nGjt77wjmwLkqKF6eE2FqNhfv1ZmYUXtQhRKF+KXQ7hM4ZkVHznNH3Btbr6vX1/twDM2iKDeGuZOFEucvQ56WMz3LVXHfJ+gKvSm5MdlLKe2HHh4qWzNVX9dh+17Jy5ClN+mKO2sEMRee5StXdGicbnmPeGrfrpHRUlmbpxJlusdRoox1d6QwI/GlFyC0p70yiKdYDi9xRzI4QKpyGi3dZAflligxAESw15gNHAH9K73IdwxJgkBJsNoQQ2B841lENixqlBb7bGzgrz7hVel8GZ528DHhH8kfaarjt5tHAbOAjFybrdP4bwml7oKwdQvjKKFrd0GZCqMz5MPAjuXFtFk5ovVtdcqxw8iGq5bf5Or01Ey+PMq2Fv1HqjqOj1S3DoBGaDyOjHPRJuwghcKUmeCYHA12egQ8232EuxE6Lxu6SfFWbCSFwoAt1DTsP7Kmd25KrWmvFGru7HV8UjR3vGg2D27NO4qhFXIKGrFzVjrlLXDK1INIj2izrumdDCIE7NdnsSH615AszaFYbPozIpHVUDG9lcg+pZ62GjyO59ZwMP7dlIWXuOh2dsPOWBC9ybGFjloSwTDmDmIIAn0t+XCvnm+Uaz5a5ewL3p/Cp7AihwYXbS5P0iHJb0gJEMy50zhvfuirSGety1rIkawDnprFb5ZTtoTHlnUH6u2yeLrJvtNXk6nQYEdTGlXeEI731uTf7Tp8Ko9AwPge4TvV0IIYem1SijiuUl3UIaPxPrwnrBB4nHbVq+9jfZCMsQyfFAOAaGfhQJLcGQPiDZY4KpwaeVHSgnkYEQlcaHbutairslnQF0NjtGCbKXamEGUrZ05KuABr/46t2PdsAa5Gen3QFACdGxptDt+gLNeuOFy2A7sDzwBXWqP6v7Un+b/gXU8EXl2URF1sAAAAASUVORK5CYII=" alt="" class="imag">
                        </div>


                    </div>
                </a>

            </div>

        </div>


    </div>




</body><br><br><br>

</html>