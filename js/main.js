(function () {
    "use strict";
    
    window.addEventListener("load", init);

    function init() {
      //<div id="set01" class="carousel slide" data-ride="carousel">
      
        fetchSet();
        
    }
    
    function fetchSet() {
        const url = "php/slides.php?set=" . ;
        fetch(url)
            .then(checkStatus)
            .then(populate)
            .catch((error) => displayError(error, "Cannot connect to API"));
    }
    
    populate() {
      let slides = qsa("#slides > div");
      for (let i = 0; i < slides.length; i++) {
        let ol = document.createElement("ol");
        ol.classList.add("carousel-indicators");
        let lo
        slides[i];
      }
    }
    

    function displayError(error, type) {
        id("error").classList.remove("hidden");
        qs("#error > h1").innerText = type;
        qs("#error > h2").innerText = error;
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
    
    /**
    * Helper function to return the response's result text if successful, otherwise
    * returns the rejected Promise result with an error status and corresponding text
    * @param {object} response - response to check for success/error
    * @returns {object} - valid result text if response was successful, otherwise rejected
    *                     Promise result
    */
    function checkStatus(response) {    // boiler plate code given out
      if (response.status >= 200 && response.status < 300) {
        return response.text();
      } else {
        return Promise.reject(new Error(response.status + ": " + response.statusText));
      }
    }
})();
