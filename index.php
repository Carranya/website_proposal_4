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

        #footer {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        #address {
            font-size: 0.8em;
            text-align: left;
            bottom: 20px;
            margin: 0.5em;
        }

        #centerContents {
            display: flex;
            justify-content: center;
        }

        #contents {
            width: 80%;
            height: 80%;
            display: block;
            background-color: lightblue;
            padding: 1em;
            border: 5px solid black;
            border-radius: 1em;
            margin: 1em;
            text-align: justify;
        }

        #contents h2 {
            text-align: center;
        }

        .classButton {
            border: 1px solid black;
            border-radius: 10px;
            font-size: 1.5em;
            color: green;
            padding: 0.5em;
            margin: 0.5em;
            opacity: 1;
        }

        .classButton:hover {
            opacity: 0.6;
        }

        .classPic{
            width: 200px;
            margin: 0.3em;
            border: 1px solid black;
        }

        #aboutTech{
            text-align: center;
        }

        #aboutTech img{
            width: 100px;
        }

        #websites {
            text-align: left;
        }

        #websitesContent {
            padding:10px;
            margin: 10px;
            display: flex;
            justify-content: center;
        }

        .websitesPic {
            width: 200px;
            transition: transform 0.5s;
            box-shadow: 5px 5px 5px rgba(0,0,0,0.1);
            margin: 10px;
        }

        .websitesPic:hover {
            transform: scale(1.2);
        }

        @media screen and (min-width: 400px){
            .websitesPic {
                width: 300px;
            }

            .classPic {
                width: 300px;
                float: right;
            }
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

        <!-- Websites -->
        <div id='pageWebsites'>
            <h2 class="classTitle">Webseiten Vorschläge</h2>
            <p>
            Am Liebsten programmiere ich Webseiten.<br>
            Es ist auch mein Hobby, immer wieder neue Ideen für Webseiten zu entwickeln und diese auf dem Bildschirm zu bringen.</p>
            <br>
            <p>Alle Codes von meiner Webseiten Vorschlägen sind in meiner <b><a href='https://github.com/Carranya'>GitHub Seite</a></b> einsehbar.</p>

            <div id="websitesContent">
            <p>
                <a href="https://github.com/Carranya/homepage_v1" target="_blank"><img src="img/websites/homepage_v1.jpg" class="websitesPic"></img></a>
                <a href="https://github.com/Carranya/homepage_v2" target="_blank"><img src="img/websites/homepage_v2.jpg" class="websitesPic"></img></a>
                <a href="https://github.com/Carranya/website_proposal_1" target="_blank"><img src="img/websites/website_proposal_1.jpg" class="websitesPic"></img></a>
                <a href="https://github.com/Carranya/website_proposal_2" target="_blank"><img src="img/websites/website_proposal_2.jpg" class="websitesPic"></img></a>
                <a href="https://github.com/Carranya/website_proposal_3" target="_blank"><img src="img/websites/website_proposal_3.jpg" class="websitesPic"></img></a>

            </p>
        </div>  

        </div>

        <!-- About -->
        <div id='pageAbout'>
            <h2 class="classTitle">Über mich</h2>
            <img src="img/karin2.jpg" class="classPic" alt="Karin Giang"></img>
            <p>
            Guten Tag, ich bin Karin Giang.
            <br><br>
            Ich bin eine Hobby Programmiererin und Webdesignerin und möchte meinen Hobby zum Beruf zu machen.
            <br><br>
            Momentan bin ich auf der Suche einer Firma, die bereit ist,<br>
            mir den Einstieg in die Informatik Branche zu ermöglichen.
            Ich habe zwar bisher noch keine Ausbildung im Bereich Informatik absolviert,<br>
            aber ich konnte privat durch Selbststudium das Programmieren von HTML, CSS, PHP, MySQL und Javascript aneignen.
            <br><br>
            In meiner Freizeit programmiere ich sehr gerne und lerne immer neue Techniken und Programmiersprachen kennen.
            Bisher habe ich bereits kleine PHP- und Javascript-Tools sowie auch Webpages programmiert. Einige meine Projekte können Sie in meinen 
            <a href="https://github.com/Carranya" target="_blank"><img src="img/icons/github.png" width="40" height="40"></img>-Account</a> einsehen.</p>      
            <br><br>

            <p id="aboutTech">
                <img src='img/tech/html.png'></img>
                <img src='img/tech/css.png'></img>
                <img src='img/tech/php.png'></img>
                <img src='img/tech/mysql.png'></img>
                <img src='img/tech/javascript.png'></img>
            </p>
        </div>
    </div>

    <div id='header'><p>Website Proposal 4</p></div>

    <div id='main'>
        <div id='menue'>
            <button id='home' class='classButton' value='pageHome'>Home</button>
            <button id='websites' class='classButton'  value='pageWebsites'>Websites</button>
            <button id='about' class='classButton'  value='pageAbout'>About</button>
        </div>
        <div id='centerContents'>
            <div id='contents'></div>
        </div>
    </div>

    <div id='footer'>
        <div id='address'>
            Karin Giang<br>
            Schützenmattstrasse 7<br>
            8302 Kloten<br>
            Phone: +41 78 823 67 56<br>
            <a href="mailto:karin.giang1982@gmail.com"><img src="img/icons/mail.png" width="20" height="20" alt="karin.giang1982@gmail.com"></img></a>
            <a href="https://www.linkedin.com/in/karin-giang-0a6072247" target="_blank"><img src="img/icons/linkedin.png" width="20" height="20"></img></a>
            <a href="https://github.com/Carranya" target="_blank"><img src="img/icons/github.png" width="20" height="20"></img></a>
        </div>
    </div>
    

    <script>
        const pages = ['home', 'websites', 'about'];

        let firstContent = document.getElementById(pages[0]).innerHTML;
        document.getElementById('contents').innerHTML = firstContent;

        for(let i=0; i<3; i++){
            document.getElementById(pages[i]).addEventListener("click", function(e){showPage(e);});
        }
        
    </script>
</body>
</html>

