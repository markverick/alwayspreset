(function() {
    "use strict";
    
    window.addEventListener("load", init);
    function createBtnDropdown(text) {
        let btnLeft = document.createElement("button");
        btnLeft.classList.add("btn", "btn-primary", "btn-sm", "a-phone", "dropdown-toggle");
        btnLeft.setAttribute("data-toggle", "dropdown");
        btnLeft.setAttribute("aria-haspopup", "true");
        btnLeft.setAttribute("aria-expanded", "false");
        btnLeft.id = "mobile-1";
        btnLeft.innerText = text;
        return btnLeft;
    }

    function createDropdown(tones) {
        let div = document.createElement("div");
        div.classList.add("dropdown-menu");
        div.setAttribute("aria-labelledby", "mobile-1");
        for (let i = 0; i < tones.length; i++) {
            let form = document.createElement("form");
            form.setAttribute("target", "_blank");
            form.setAttribute("action", "download.php");
            form.setAttribute("method", "post");
            let btn = document.createElement("button");
            btn.classList.add("btn-link", "dropdown-item");
            btn.setAttribute("type", "submit");
            btn.setAttribute("name", "url");
            btn.value = tones[i]['url'];
            btn.innerText = tones[i]['name'];
            form.appendChild(btn);
            div.appendChild(form);
        }
        return div;
    }

    function createPC(url, classExt = "btn-secondary") {
        let form = document.createElement("form");
        form.classList.add("w-50");
        form.setAttribute("target", "_blank");
        form.setAttribute("action", "download.php");
        form.setAttribute("method", "post");
        let btn = document.createElement("button");
        btn.classList.add("w-100", "btn", "btn-sm", "a-pc", classExt);
        if (classExt != "btn-secondary") {
            btn.classList.remove("a-pc");
        }
        btn.setAttribute("type", "submit");
        btn.setAttribute("name", "url");
        btn.value = url;
        btn.innerText = "คอมพิวเตอร์";
        form.appendChild(btn);
        return form;
    }

    function newBtnGroup(entry) {
        
        let divWrap = document.createElement("div");
        divWrap.classList.add("btn-group", "w-100");
        divWrap.setAttribute("role", "group");
        let divLeft = document.createElement("div");
        divLeft.classList.add("btn-group", "w-50");
        divLeft.setAttribute("role", "group");
        let btnDropdown = createBtnDropdown("โทรศัพท์");
        let dropdown = createDropdown(entry['mobile']);
        let divRight = createPC(entry['pc_url']);
        divLeft.appendChild(btnDropdown);
        divLeft.appendChild(dropdown);
        divWrap.appendChild(divLeft);
        divWrap.appendChild(divRight);
        return divWrap;
    }

    function newBtnAll(entry) {
        let form = createPC(entry['pc_url'], "btn-danger");
        form.classList.remove("w-50");
        return form;
    }

    function createEntry(entry) {
        let title = document.createElement("div");
        title.classList.add("col-12", "col-md-6", "d-flex");
        let h5 = document.createElement("h5");
        h5.classList.add("my-2");
        h5.innerText = entry['title'];
        title.appendChild(h5);
        let col = document.createElement("div");
        col.classList.add("col-12", "col-md-6");
        let btnView;
        if (entry['mobile'].length != 0) {
            btnView = newBtnGroup(entry);

        } else {
            btnView = newBtnAll(entry);
        }
        col.appendChild(btnView);
        id("entries").appendChild(title);
        id("entries").appendChild(col);
    }

    function init() {
        id("check").addEventListener("click", () => {
            fetchTones();
        });
        id("check").disabled = false;
    }
    
    function fetchTones() {
        id("entries").innerHTML = "";
        const url = "dl_list.php";
        let data =  new FormData();
        data.append("code", id("code").value);
        fetch(url, {method: "POST", body: data})
            .then(checkStatus)
            .then(JSON.parse)
            .then(populate)
            .catch(console.log);
    }

    function populate(json) {
        for (let i = 0; i < json.length; i++) {
            createEntry(json[i]);
        }
        show(id("dlview"));
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
