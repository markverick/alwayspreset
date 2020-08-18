(function () {
  window.addEventListener("load", init);
  function init() {
    let imgs = qsa("#gridview a");
    for (let i = 0; i < imgs.length; i++) {
      imgs[i].onclick = () => loadView(imgs[i].id);
    }
  }
  
  function loadView(path) {
    $("#spinner").show();
    $("#slide").hide();
    id("slide").innerHTML="";
    $("#preview").modal();
    $.ajax({
        url: "slides.php?set=tone1&url=slides/" + path,
        type: 'GET',
        success: function(res) {
          $("#slide").ready(function(){
            $("#slide").fadeIn(2000);
            $("#spinner").hide();
            if(qs("#slide ol").innerText != "") {
                let p = document.createElement("p");
                p.innerText = "ไม่พบภาพตัวอย่าง อยู่ในระหว่างการปรับปรุง";
                qs("#slide .carousel-inner").appendChild(p);
            }
          });
        }
    });
  }

  
  /* ------------------------------ Helper Functions ------------------------------ */
    /**
    * Returns the element that has the ID attribute with the specified value.
    * @param {string} idName - element ID
    * @returns {object} DOM object associated with id.
    */
    function id(idName) {
        return document.getElementById(idName);
    }

    /**
    * Returns the first element that matches the given CSS selector.
    * @param {string} query - CSS query selector.
    * @param {Object} [object=document] - DOM object to be selected.
    * @returns {object[]} array of DOM objects matching the query.
    */
    function qs(query, object = document) {
        return object.querySelector(query);
    }
    
    /**
    * Returns the array of elements that match the given CSS selector.
    * @param {string} query - CSS query selector
    * @returns {object[]} array of DOM objects matching the query.
    */
    function qsa(query) {
        return document.querySelectorAll(query);
    }
})();