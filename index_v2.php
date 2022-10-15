<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Proposal 4</title>

    <style>
        body {
            font-family: Verdana;
            text-align: center;
        }

        #displayNone {
            display: none;
        }

        .classPage {
            width: 100%;
            height: 100%;
            display: block;
            background-color: lightblue;
        }

        .classButton {
            border: 1px solid black;
            font-size: 2em;
            color: green;
            padding: 0.5em;
            margin: 0.5em;
        }

        .classButton:hover {
            opacity: 0.6;
        }
    </style>

    <script>
        function showPage(e){
            let pickPage = e.target.value;
            let contents = document.getElementById(pickPage).innerHTML;
            document.getElementById('contents').innerHTML = contents;
        }
    </script>
</head>
<body>
    <div id='displayNone'>
        <div id='pageHome'>Home</div>
        <div id='pageProjects'>Projects</div>
        <div id='pageAbout'>About</div>
    </div>

    <div id='header'><p>Website Proposal 4</p></div>

    <div id='main'>
        <div id='menue'>
            <button id='home' class='classButton' value='pageHome'>Home</button>
            <button id='projects' class='classButton'  value='pageProjects'>Projects</button>
            <button id='about' class='classButton'  value='pageAbout'>About</button>
        </div>
        <div id='contents' class='classPage'></div>
    </div>



    
    <div id='footer'>
        <div id='adress'>
            <p>
                Karin Giang<br>
                Schützenmattstrasse 7<br>
                8302 Kloten<br>
                078 / 823 67 56<br>
                karin.giang1982@gmail.com
            </p>
        </div>  
    </div>

    <script>
        const pages = ['home', 'projects', 'about'];

        let firstContent = document.getElementById(pages[0]).innerHTML;
        document.getElementById('contents').innerHTML = firstContent;

        for(let i=0; i<3; i++){
            document.getElementById(pages[i]).addEventListener("click", function(e){showPage(e);});
        }
        
    </script>
</body>
</html>

