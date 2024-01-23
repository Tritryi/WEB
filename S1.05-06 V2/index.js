var icon = document.getElementById("icon");

      icon.onclick = function(){
        document.body.classList.toggle("dark-theme");
        if(document.body.classList.contains("dark-theme")){
          icon.src = "Images/sun.png";
        }else{
          icon.src = "Images/moon.png";
        }
      }

      function afficherDiv(id) {
        var divObj = document.querySelectorAll('.obj');
        divObj.forEach(function (divObj) {
            divObj.style.display = 'none';
        });
    
        var divShow = document.getElementById(id);
        if (divShow) {
            divShow.style.display = 'block';
        }
    }

    $('.slide').hislide();