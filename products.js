var colorObject = {
      "Orange": {
        "HTML": ["Links", "Images", "Tables", "Lists"],
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
        chapterSel.length = 1;
        sizeSel.length = 1;
        //display correct values
        for (var y in colorObject[this.value]) {
          sizeSel.options[sizeSel.options.length] = new Option(y, y);
        }
      }
      sizeSel.onchange = function() {
        //empty Chapters dropdown
        chapterSel.length = 1;
        //display correct values
        var z = colorObject[colorSel.value][this.value];
        for (var i = 0; i < z.length; i++) {
          chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
        }
      }
    }