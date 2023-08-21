<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.0.0/css/responsive.bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
    <title><?php echo $title ?? '' ?></title>
    <style>
        @font-face {
            font-family: 'Graphik Web';
            src: url('Graphik-SuperItalic-Web.eot');
            src: url('Graphik-SuperItalic-Web.eot?#iefix') format('embedded-opentype'),
                url('Graphik-SuperItalic-Web.woff2') format('woff2'),
                url('Graphik-SuperItalic-Web.woff') format('woff');
            font-weight: 900;
            font-style: italic;
            font-stretch: normal;
        }

        body {
            font-family: "Graphik";
            font-weight: 500;
        }

        input:focus {
            outline: none;
        }

        .form-control:focus {
            color: #495057;
            background-color: #b5e7ee;
            border-color: black;
            outline: 0;
            box-shadow: #b5e7ee;
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

        #category_list.dataTable {
            border-collapse: separate;
            border-spacing: 1px;
        }

        #category_list.dataTable th,
        #category_list.dataTable td {
            border: none;
            padding: 8px;
        }

        #admin_user_list.dataTable {
            border-collapse: separate;
            border-spacing: 1px;
        }

        #admin_user_list.dataTable th,
        #admin_user_list.dataTable td {
            border: none;
            padding: 8px;
        }
    </style>

</head>

<body>