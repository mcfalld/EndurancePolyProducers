<head>
    <title>
        Endurance Poly Producers
    </title>
    <link rel="shortcut icon" href="./images/emblemNoBg.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">


    <link rel="stylesheet" type="text/css" href="style.css">

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>

    <script>
      // <!-- this part is important! -->
      $(document).ready(function () {
        $(".button-collapse").sideNav();
      });
    </script>

    <script> 
    
    var colorObject = {
      "Orange": {
        "2\"": ["Links", "Images", "Tables", "Lists"],
        "CSS": ["Borders", "Margins", "Backgrounds", "Float"],
        "JavaScript": ["Variables", "Operators", "Functions", "Conditions"]
      },
      "Black": {
        "PHP": ["Variables", "Strings", "Arrays"],
        "SQL": ["SELECT", "UPDATE", "DELETE"]
      }
    }
    window.onload = function() {
      var colorSel = document.getElementById("color");
      var sizeSel = document.getElementById("size");
      var chapterSel = document.getElementById("chapter");
      for (var x in colorObject) {
        colorSel.options[colorSel.options.length] = new Option(x, x);
      }
      colorSel.onchange = function() {
        //empty Chapters- and sizes- dropdowns
        sizeSel.length = 1;
        chapterSel.length = 1;
        //display correct values
        for (var y in sizeObject[this.value]) {
          sizeSel.options[sizeSel.options.length] = new Option(y, y);
        }
      }
      sizeSel.onchange = function() {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = sizeObject[sizeSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
          chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
      }
    }
    </script>



    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet"> 
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    
    <style>
      .loading:after {
    overflow: hidden;
    display: inline-block;
    vertical-align: bottom;
    -webkit-animation: ellipsis steps(4,end) 900ms infinite;      
    animation: ellipsis steps(4,end) 900ms infinite;
    content: "\2026"; /* ascii code for the ellipsis character */
    width: 0px;
    
  }
  
  @keyframes ellipsis {
    to {
      width: 20px;    
    }
  }
  
  @-webkit-keyframes ellipsis {
    to {
      width: 20px;    
    }
  }
@import url('https://fonts.googleapis.com/css2?family=Work+Sans&display=swap');
</style> 
    <script>
      $(document).ready(function () {
        $(".button-collapse").sideNav();
      });
    </script>
</head>