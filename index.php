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
            float: right;
            width: 300px;
            margin: 0.3em;
            border: 1px solid black;
        }

        #aboutTech{
            text-align: center;
        }

        #aboutTech img{
            width: 100px;
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
            <button id='projects' class='classButton'  value='pageProjects'>Projects</button>
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
        const pages = ['home', 'projects', 'about'];

        let firstContent = document.getElementById(pages[0]).innerHTML;
        document.getElementById('contents').innerHTML = firstContent;

        for(let i=0; i<3; i++){
            document.getElementById(pages[i]).addEventListener("click", function(e){showPage(e);});
        }
        
    </script>
</body>
</html>

