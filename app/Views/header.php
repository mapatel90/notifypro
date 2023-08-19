<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?php echo $title ?? '' ?></title>
    <style>
       body {
  font-family: "Graphik", "Courier New", monospace;
  font-weight: 600;
}

      

        .custom-center {
            display: flex;
            flex-direction: column;
            justify-content: center;
            /* align-items: center; */
            padding: 20px;
        }

        .custom-input {
            border: 2px solid black;
            background-color: #b5e7ee;
            width: 100%;
        }

        .custom-button {
            padding: 5px 25px;
            font-weight: 600;
            font-size: 25px;
            border: 2px solid black;
        }

        .btn-color {
            background: linear-gradient(to right, #ccffcc 0%, #99ccff 100%);
        }

        .btn {
            width: 100%;
            margin: 0px 0;
        }

        .custom-container {
            min-height: 60vh;
            display: flex;
            justify-content: center;
            /* align-items: center; */
        }

        .header_title {
            border-bottom: 2px solid black;
            padding-bottom: 5px;
            text-align: center;
            font-weight: 600;
        }

        @media (max-width: 767px) {

            h1 {
                font-size: 40px;
            }

            h4 {
                font-size: 25px;
            }

            .btn {
                width: 100%;
            }

            .btn-lg {
                padding: 12px 20px;
                font-size: 25px;
            }
        }
    </style>

</head>

<body>