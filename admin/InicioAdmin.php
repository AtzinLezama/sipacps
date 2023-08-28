<?php
include '../php/rolAdmin.php'
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Expires" content="0">
    <meta http-equiv="Last-Modified" content="0">
    <meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <link rel="stylesheet" href="../css/StyleHome.css">
    <link rel="stylesheet" href="../css/cards.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">

    <title>Home</title>
</head>

<body>
    <?php
    require '../layout/headerAdmin.php'
    ?>

    <div class="con1">


        <div class="container">
            <a href="publicar.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Publicar</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/news.svg" alt="" class="imag">
                    </div>

                </div>
            </a>
            <a href="readReportes.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Reportes</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/warning.png" alt="" class="imag">
                    </div>

                </div>
            </a>
            <a href="registro/registroOwner.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Agregar condo</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/createuser.png" alt="" class="imag">
                    </div>

                </div>
            </a>
            <a href="lectura/readOwner.php ">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Listar condo</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/lista.png" alt="" class="imag">
                    </div>

                </div>
            </a>




        </div>
        <div class="container">
            <a href="registroSaldo.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Saldos</h4>

                    </div>
                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAEiElEQVRoge3ZW4iVVRQH8O+oqc1ozeQEYRmJ4CVJqSSSkAG7WBIFgoFmKJqSBhUFdq+HoF6KAqmoKHzwoYguiPVihTljZnazUDOMSiEqRctMy2x+Pex9OJ9nvnOZy/mMmj98nPPttfbaa+112WufkyQDGMAAcgM2oaNR77lBRKPeq2FQ39X/d+A/Y8iQnNdbkCTJx6n3iUmSTMtZh9qoEOOv9WD+673NkX5FhiG39ULG7ZXk5YZ6F45sXf0lL0lOQrLjrNT3UXmvXxeq7SAG41l0KeEYHuyNvIaihiGLI/lzLMUK7I5js3sqr6GoYcgbkTwtNTYzjq3uqbxy5HmOHImfFyTxLCkUCu8lSVLIUYf6UMMjV+DvyPI1nsAsVCw4JzO0DsW1R1agz8R6/JVK+K9wfgbvyEg/1HjNuy++Ky4+oQbfCMxJ5c2mDJ6JRUMbp3FlBYuK3ZxB24f9GeM/42jG+LIoq64Wp78PxLXx84YM2tYkSUZhSXEA05MkaU2SZHcGf1HG2gxaY4FWHIw7OaOMNi2VQ9/EhD8enzllvO2R7yBa8rWipMQ9qSRuKaONx5OpRF+NS8t4WqORsDJf7U9UZDg+iopsQGsGT2ZZjUZsiOQtGJ6P1hWA0dgTFdqF9jrmtKc8sQej89C1JqIxW1JhtD5WoklC+R0Rvy/DOym+LeVGYBRWYT/+QAcu641SU3A/3sd3OILD2IG3cItUe56aNxx3KxWAajiIlRiWml/AIqF0l+NPoerVVL5Z6FI/q0MJQvuxFleiUCarBQuFq+xO/BafnXFsoe6FYXLcuCLeFTa0SbgOwLpqBkzAU07cxZ/i5NkYg2FR4CQsiMocTfHvwHKMqMfjZes34THhrgI/4sYyntZI63bApvug9MWnE/MxtA4FzsR92Juaf1BoDsfVacS1+Dbl4WfKPRX5pkee7gdpdDUh9p/H1HoWz5AzBHOxMWVQxbCLc8ZErxbxKS6pIL89egkeymKYJ9za+u0kxYV4MSPslmBoNPqu1CYewh0YnCGrED1+PPK+iVP6S9d6DWrDvUpnC3yPL1Lvr+LsKvPfTnn3kSxjc0P0wLwyA/bimipzpqc2YB+ubrSSm/FDzK/r0VSFdxAeiMptq8BTwJ1K1asT5zTOgtLCHU7EUeGwXI5zM/hPj3yHM2gtSnebLjyeaz5gakzIzUr38yK24VHMEK6xRY98WCbjYqHNhwO4LjcDsiCcK4tiEv8qG12YlZqzQuilCB302P5SZiaeE+4WB+LTiYf14JwRSu3lwuG4XSizH+CqSB+Jl1MGrpLqufpiwLgY37WwXQil8/qw1pS4UaLnsq7JvRI8PxUKB2IsXyT0N21Cv/W08KNBOkQ6Y2i09WCtxUInTfgpdXx/GNCMl1LKvYIzqvAPiUatEdqaIo5hXdyQ5gpzm4RrbhEv4NQ+GxGFb41Cf8fSHs5tjoqvU6r7ooFrhGbwtOjRualQOoyb+sWAqEhBKJmfYHIfZbXhVuE/8nQnXY4v+7pWbsBY4WbZgV+EnNsoHJL5NnwDGMD/HP8A8EyALI3dMWYAAAAASUVORK5CYII=" alt="" class="imag">
                    </div>


                </div>
            </a>

            <a href="readSaldos.php ">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Listar saldos</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/lista.png" alt="" class="imag">
                    </div>

                </div>
            </a>
            <a href="registroStaff.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Staff</h4>

                    </div>

                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAABmJLR0QA/wD/AP+gvaeTAAAETElEQVRoge2Zz29VRRTHz31ShKCRiL6kxZKK/hXGBFIJEApLggu7kaCsTYXaBNMEEtYa40I3rGyoTUhYUBICLQ0xCmHBXuCBEmOQH2klYkv7cXHP9Z3e3h8z981rteEkN+/ec77znfnOnZkzd57Ic/sfG7AXuAj8CczofV9g3ofAFHAYWBei3enKTpBvx9vE2wjRUbayvUr8FBgAOvX6VH1UqTCH93XgQ+BnI+hLoCOEkEtKOJARO6Kxi4F51wHHTEdNAK9W1ZCQTitZZ0asS2PTIXkN5h3gd8VdzcPVfCv/r5qrkGv6+0FGrD+F8bFc3mRoicglEamLyISI7K5QxyLSPjMpj+hw6gKOAn+3MNmzeOvAwdRk/wJY05IIU+lx8q2V5beI9xawJ4iAVKV9xIlrhrAJ0fI+ACaBj4AXQ7R79RpwBdhhnt8FLqxkm7wMeBsYNGN3WK/EBoG3KvD2AEPAeeAu8ESvu8A48BnQE0JAN3AamNcGXwa2mfh29aGYEeANB97NwPeGt8ieAaPA5qoidgOPU6QHMnDvpzCPgJ0FvDsN71PirUfem56guUV5XMSbV1kvzfxwDjip92czsGc1dpJ4OKBlt2dgdxjeM0CX+oeBYYP795k4t5wxwntdRbxCc2/zlfrqwJw2YpPBbgJmNVZX39da9jfgZYPdCPyqsW+AyKNjI+BbLfsLsNGl0JAW+AGoGX/S2x8b32H1jRtfDfhR/YPGP2CGi/ceT3mT+fiJS4HrCu5L+fvVP2V8U+rrT2H3qf+a8V1V335fEYbjgHL85AKeUfBrKf8G4k/RBeJlc4vePwFeSmHryjFtfI/U9wy4AOwHXnBoT414bo0SD2OAhy5CAMiJjWj4KM28MuLCQ9Nmzf2kQ3sms8q2KiQZMjf0AtjnKaST5jwsbZApN6RlgwjpAP4w5A+AtT5CXOrx4UnMa/WIomhORMaMazSKolkfjnZZlU/d73LuV9SWJKXktUVRlJmwiBPZhIggIr1RFOUNw0U8ec/ODc3hqSzE1ZZbSJjv4BasrMNcBa/+46Bk3fYlTPLEcvNmFUhn0jGXiom322PkZO4MXq88ksdbVLAG7Eo16phDuc9T4nexePdcI/6oWiTWU8gSXicDDinJKQfsKcUe8uCl6G3TPFcu5S1TdlN/3yxrnMHcLEQtxWQdwyZmPw9ceLMN2Kq9cccBe0exWz14wRyXmnj6OLaUt2wN7xCRv/Rxve61KuMy8KXfI2rzZbyFQ0sL3tMKuwug3Yq5VyYixSsiclBExkXkvoHcF5FzGhMXXpfM3hCRLSLSIyK3cjDJ/LjtwJfmbURRlHlQDbznyuuyjDX0t+jEL4k1CjBt5XURkvRGaCFBeV2EJCtWaCFBeX3eSFEuqTJHgvKumjlSasAa4iPReTL+QQLWamwOj//52sVbVultyi1vaV4WXtdd5GkRWSiILyjG19rF+9xW3P4BNdDyOEoxM8MAAAAASUVORK5CYII=" alt="" class="imag">
                    </div>


                </div>
            </a>
            <a href="readStaff.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Listar Staff</h4>

                    </div>

                    <div class="content">
                        <img src="../Image/lista.png" alt="" class="imag">
                    </div>

                </div>
            </a>




        </div>
        <div class="container">
            <a href="readContact.php">
                <div class="card">

                    <div class="top-row background-top-row">
                        <h4>Contact</h4>

                    </div>
                    <div class="content">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFAAAABQCAYAAACOEfKtAAAABmJLR0QA/wD/AP+gvaeTAAAEZUlEQVR4nO2aTahVVRTH1zbT7PmEEOOZRDTVgaiZs3wFFaRkENGgoKLBwyD1kWYfSAMdSIU0kAY1iCbSIPqwj1E6KJQykKxo0EOfQR+DUOr1jBvU+zW463IOl/Oxz97nw6frB4f77j1r/dfa/3f2Pfuce0QMwzAMwzAMwzAMwzAq4HyCgK0iMikim0RkpNGOumdWRE6JyCHn3CdlwaUGAgdE5MUaGpuPHHDO7QvOBrbSpwfsBlbW2NxlCbAS2KNjBtgSI3ZcRXbX2OO8AHhWx34sRuQvFRmrsbd5ATCmY5+JEQGgxr7mFT7jX+ApdAz4GnBX0fvjPt54GSgic7pdTe/jZ55N4ZqmsJGPGRiJGRiJGRiJGRhJIwYCK4D9wGlgVrfTwEvA8iZqXpaELGOAB4E/yed34J4aehsHdgIbYrUKasQt46oKqHlzmvY+sBkY0W0c+ED39YA7Ivp6MvUP+Q/YE6pVUqc9A4EbgRlNyR0QsFdjpoHrAvv6POPI3huiVVKnVQP3D448j9ijGvt4QE836VGXxbaqeiW1WjXwGw3f7BF7p8a+G9DT0znmAbxXVa+kVqsGDqbvUo/Y0dDmyJ6+A96oqldSq1UDLwYYeKFiPyPAvznmXQBuraLnUa90/HWuA6f09TaP2I1DOV445y6JyKcZuy6KyN3Ouekqeo1T8Qic1PAPPWI/1thdAT3dnnH01XrySNVqdQovA37SlOcK4l7QmPPAssC+jgwZ+BWwKESrpE57Bmr8JpIfoo7SP9su1e0u4CPdNwNsLFfMrTMG/DFk4uFQvYI67RqoOevoX/vmMQusC24qqfNYhnati+kujsAtwFSBeQN+BO4Lbiyp99aQ7hywPVY3pd+OgYADXkkN5AywA1hNci28hv7F/7epwR5EfwkL7O964MuMf9C+oTgHPA/8ApwFnqhz/NECwKsa2gMmgNzlEbAA2E7y6MTB4Ab7esuBHzJMfFsNdsDrGftzT3Qp7eYNBB5ImVd6GZfKG0+ZeH9wk32tVcB3GSZ9r0bmsbNEt1kDgcUkS5eJAP2nNPcccG1wo32tG4AvCszKogesKNBs3MCHNeQMBdO2IP8akiPnoeBGE71FwGsk9yR9WF+g17iB72jIjogau1TjSKhGhuY24GcP884Biwt0GjdwWkNWR9RYoxpnQzVydEeBQ8A/Q6bN0T9zPwOsKtFo3MC/NWQ0osbgzsylUI0S/ZuBw8BJNe2WCrnNGnil4zN++104EjMwEjMwEjMwEjMwEjMwEjMwkoVNCQMLRWRCRO6V/gPbn4nIm865XlM1u6yb10zQQhpYApzIuPY8ReDzMF3U7exKBHhZU6eAR4BHSW71R91AbbNulwb+pqnrU59t0M9+DW6o5bo+42/qJLJEX9NPCkwP7bsi6jZl4El9nUx9Nvj7REM1u6ybTcQUXjucm/pCX1tvl83V7ew7MCs3upkO6vrkeq0D6xx4Gya2WdeuRAzDMAzDMAzDMAzDMNrkf7nED78R0VxQAAAAAElFTkSuQmCC" alt="" class="imag">
                    </div>


                </div>
            </a>






        </div>
    </div>

</body>

</html>