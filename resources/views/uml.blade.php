<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@400;700&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Appointment App UML</title>
    <style>
        html,
        body {
            min-height: 100vh;
            min-width: 100vh;
            background: #ffffff;
        }

        body {
            display: grid;
        }

        #canvas {
            display: table;
        }
    </style>
</head>
<body>
    <canvas id='canvas' width="400" height:"1000"></canvas>

    <script src="//unpkg.com/graphre/dist/graphre.js"></script>
    <script src="//unpkg.com/nomnoml/dist/nomnoml.js"></script>

    <script>
        var canvas = document.getElementById('canvas');
        var source = `#background: #FFFFFF
#import: filename
#arrowSize: 1
#bendSize: 0.3
#direction: down | right
#gutter: 30
#edgeMargin: 0
#gravity: 1
#edges: hard | rounded
#background: transparent
#fill: #eee8d5; #fdf6e3
#fillArrows: false
#font: Calibri
#fontSize: 10
#leading: 1
#lineWidth: 2
#padding: 3
#spacing: 23
#stroke: #33322E
#title: filename
#zoom: 2
#acyclicer: greedy
#ranker: network-simplex | tight-tree | longest-path
[<start> request]->Request[<abstarct> Router|web.php]
[<abstarct> Router]->[ApptController]
[ApptController|select();showcal();selhour(data);store();index();create()]
[Appt|get();insert(nume, data, cnp, pos)]<->[ApptController|select();showcal();selhour(data);store();index()]
[<database> appointment_app]<--[<table> appt|nume|cnp|data|pos]
[<table> appt|nume|cnp|data|pos]<->[Appt]
[ApptController]->[<abstract> Viewer |select.blade|showcal.blade|selhour.blade|create.blade|list.blade]
[<abstract> layout.blade]->[<abstract> Viewer]
[<abstract> Viewer]->Response to User[<end> Browser]
`;
        nomnoml.draw(canvas, source);
    </script>
</body>
</html>