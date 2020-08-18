(function () {
  window.addEventListener("load", init);

  function init() {
    if (id("purchase")) id("purchase").addEventListener("click", () => fbq('track', 'InitiateCheckout'), false);
    if (id("contact")) id("contact").addEventListener("click", () => fbq('track', 'Contact'), false);
    // if (id("checkout")) id("checkout").addEventListener("click", () => {
    //   let items = qsa("#items input");
    //   let content = [];
    //   let value = id("inputPrice").value;
    //   for (let i = 0; i < items.length; i++) {
    //     if (items[i].checked) {
    //       fbq('track', 'Purchase', {
    //         content: [
    //           {
    //             id: items[i].id,
    //             quantity: 1
    //           }
    //         ],
    //         currency: 'THB',
    //         value: value
    //       });
    //     }
    //   }
    // }, false);
    let slides = qsa("#gridview a");
    for (let i = 0; i < slides.length; i++) {
      slides[i].addEventListener("click", () => {
        fbq('track', 'ViewContent', {
          content_ids: 'slideshow',
        });
      });
    }
    let viewSetDetail = qsa(".view-set-detail");
    for (let i = 0; i < viewSetDetail.length; i++) {
      viewSetDetail[i].addEventListener("click", () => {
        fbq('track', 'ViewContent', {
          content_ids: 'view_set_detail',
        });
      });
    }
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