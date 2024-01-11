<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>clinique</title>

    <style>
        body {
            margin: o;
            padding: 0;
        
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
      .parent{
        display: flex;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        background: white;
        border: 1px solid gray;
            border-radius: 14px;
            background-color:rgb(87, 87, 207);
      }
        .navbar ul {
            list-style: none;
          
            padding: 0;
            margin: 0;
            text-align: center;

        }

        .navbar li {
            display: inline-block;
        }
       .navbar{
        display: flex;
        margin-left: 30%;
       }
      
       .navbar a {
            text-decoration: none;
            color: black;
            width: 150px;
            height: 10px;
            display: block;
            padding-top: 50px;
            padding: 15, 20px;
            font-size: 15px;
            text-transform: uppercase;
            font-weight: bold;
            text-align: center;
            
        }
        
        .div1{
            
            width: auto;
            height: auto;
            border-radius: 14px;
         }
        .navbar a:hover {
        color: black;
        }

        /* aller a la ligne*/
        .contact-box {
            margin-top: 450px;
            width: 500px;
            background-color: white;
            box-shadow: 0 0 20px gray;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            position: absolute;
        }

        form {
            margin: 35px;
            text-align: center;
        }

        .input-field {
            width: 400px;
            height: 40px;
            margin-top: 20px;
            padding-left: 10px;
            border: 1px solid gray;
            border-radius: 14px;
        }

        /* Tableau*/
        table {
            width: 800px;
            margin: auto;
            text-align: center;

        }


        table,
        tr,
        th,
        td {
            width: 100px;
            padding: 20px;
            color: white;
            border: 1px solid #080808;
            border-collapse: collapse;
            font-size: 18px;
            font-family: Arial;
            background: linear-gradient(top, #3c3c3c 0%, #222222);
            background: -webkit-linear-gradient(top, #3c3c3c 0%, #222222 100%);
        }

        td:hover {
            background-color: purple;
        }

        /* css grid*/
        .container {
            width: 90%;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 20px;
        }

        .box {
            box-shadow: 0 0 20px gray;
            margin-left: 150px;
            height: 200px;
            width: 300px;
            color: white;
            border: 2px solid white;
            position: relative;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            background-color: blue;
       
       
        }

        h2 {
            color: black;
            text-transform: uppercase;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            margin: 0;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);

        }
        .nom{
           
            text-align: right;
        }
    </style>

</head>