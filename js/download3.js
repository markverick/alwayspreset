(function() {
    "use strict";
    
    window.addEventListener("load", init);

    function init() {
        id("check").addEventListener("click", ()=> {
            fetchTones();
        });
        id("check").disabled = false;
    }
    
    function fetchTones() {
        const url = "dl_list.php";
        let data =  new FormData();
        data.append("code", id("code").value);
        fetch(url, {method: "POST", body: data})
            .then(checkStatus)
            // .then(JSON.parse)
            .then(fill)
            .catch(console.log);
    }

    function fill(text) {
        id("dlview").classList.remove("hidden");
        id("items").innerHTML = text;

        //Track if the code is correct
        if(id("items")) {
            fbq('track', 'Purchase');
        }
    }
    function populate(json) {
        id("dlview").classList.remove("hidden");
        let inner = id("items").innerHTML;
        id("items").innerHTML = "";
        for (let i = 0; i < json.length; i++) {
            id("items").innerHTML += inner;
        }
        let titles = qsa("#items h5");
        let phone = qsa("#items a-phone");
        let pc = qsa("#items a-pc");
        for (let i = 0; i < json.length; i++) {
            titles[i].innerText = json[i];
        }
    }
    
    
    /* ------------------------------ Helper Functions ------------------------------ */
    
    /**
     * Hide an element by adding "hidden" class
     * @param {Object} object - a DOM element we want to hide.
    */
    function hide(object) {
        object.classList.add("hidden");
    }
    
    /**
     * Show an element by adding "hidden" class
     * @param {Object} object - a DOM element we want to show.
    */
    function show(object) {
        object.classList.remove("hidden");
    }
    
    /**
    * Returns the element that has the ID attribute with the specified value.
    * @param {string} idName - element ID
    * @param {Object} [object=document] - DOM object to be selected
    * @returns {object} DOM object associated with id.
    */
    function id(idName, object = document) {
        return object.getElementById(idName);
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
    * @param {Object} [object=document] - DOM object to be selected
    * @returns {object[]} array of DOM objects matching the query.
    */
    function qsa(query, object = document) {
        return object.querySelectorAll(query);
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
