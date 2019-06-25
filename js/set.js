(function () {
  window.addEventListener("load", init);
  
  let SET = id("setNum").innerText;
  function init() {
    loadGrid();
  }
  
  function loadGrid() {
    $.ajax({
      url: "set.php?set=" + SET,
      type: 'GET',
      dataType: "json",
      success: function(res) {
        let imgs = res;
        for(let i = 0; i < imgs.length; i++) {
          let col = document.createElement("div");
          col.classList.add("p-2", "col-sm-12", "col-md-6", "col-lg-6", "col-xl-4")
          let a = document.createElement("a");
          a.classList.add("card");
          col.appendChild(a);
          let img = document.createElement("img");
          img.classList.add("card-img-top", "d-block", "w-100");
          img.src = imgs[i];
          let btn = document.createElement("btn");
          btn.classList.add("btn", "btn-primary");
          btn.innerText="ตัวอย่างภาพเซ็ตนี้";
          a.appendChild(img);
          a.appendChild(btn);
          a.id = SET + "/tone" + (i+1);
          a.addEventListener("click", loadPreview);
          qs("#gridview > div").appendChild(col);
        }
        // loadPreview()
      }
    });
  }
  
  function loadPreview() {
    $("#spinner").show();
    $("#slide").hide();
    id("slide").innerHTML="";
    $("#preview").modal();
    $.ajax({
        url: "slides.php?set=tone1&url=img/slides/" + this.id + "/*",
        type: 'GET',
        success: function(res) {
          $("#slide").ready(function(){
            $("#slide").fadeIn(2000);
            $("#spinner").hide();
          });
          id("slide").innerHTML = res;
        }
    });
    // $("#gridview").fadeOut();
    // $("#slides").fadeIn();
    
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