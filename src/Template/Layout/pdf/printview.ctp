<html>
    <head>
        <title><?=$titleModule;?></title>
        <style>
            @import url('https://fonts.googleapis.com/css?family=Roboto');
           .table{
                width: 100%;
                max-width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
            }

            .table1{
                width: 100%;
                max-width: 100%;
                margin-bottom: 1rem;
                background-color: transparent;
            }
            *, *::before, *::after {
                box-sizing: border-box;
            }
            table {
                display: table;
                border-spacing: 2px;
                border-color: grey;
                border-collapse: collapse;
            }


       
            .m-portlet .m-portlet__body {
                color: #575962;
            }
            html, body {
                font-size: 14px;
                font-weight: 300;
                font-family: "Source Sans Pro";
                -webkit-font-smoothing: antialiased;
            }
            html{
                -webkit-text-size-adjust: 100%;
                 -webkit-tap-highlight-color: transparent;
            }
            /**/
            h3, .h3 {
                font-size: 1.50rem;
                font-family: sans-serif;

            }
            h1, h2, h3, h4, h5, h6, .h1, .h2, .h3, .h4, .h5, .h6 {
                margin-bottom: 0.5rem;
                font-family: inherit;
                font-family: sans-serif;
                line-height: 1.2;
                color: inherit;
            }
            h1, h2, h3, h4, h5, h6 {
                margin-top: 0;
            }
            *, *::before, *::after {
                box-sizing: border-box;
            }
            user agent stylesheet
            h3 {
                display: block;
                -webkit-margin-before: 1em;
                -webkit-margin-after: 1em;
                -webkit-margin-start: 0px;
                -webkit-margin-end: 0px;
            }
            .text-right {
                text-align: right !important;
            }
  


            .table th {
                font-weight: 300;
            }
            .table th, .table td {
                padding: 0.70rem;
                vertical-align: top;
                border-top: 1px solid #f4f5f8;
            }


            .table1 th {
                font-weight: 300;
            }
            .table1 th, .table1 td {
                padding: 0.70rem;
                vertical-align: top;
            }


            th {
                text-align: inherit;
            }
            *, *::before, *::after {
                box-sizing: border-box;
            }
           
            td, th {
                display: table-cell;
                font-family: sans-serif;
            }
            .m-portlet .m-portlet__body {
                color: #575962;
            }
            .table-bordered th, .table-bordered td {
                border: 1px solid #f4f5f8;
                    border-bottom-width: 2px;
            }
            .table thead th {
                vertical-align: bottom;
                border-bottom: 2px solid #f4f5f8;
            }

        </style>
    </head>
    <body>
        <div class="grid-container">
            <?=$this->fetch('content');?>
        </div>
    </body>
</html>