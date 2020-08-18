(function () {
  window.addEventListener("load", init);
  function init() {

  }
  $('#submit').click(function(event) {
    $.ajax({
        url: 'add_code.php',
        type: 'post',
        data: $('#addCode').serialize(),
        success: function(data) {
          $('#code').text(data);
        }
    });
  });
  $('#set1_all').click(function(event) {   
      if(this.checked) {
        // Iterate each checkbox
        $('.s1').each(function() {
          this.checked = true;                        
        });
      } else {
        $('.s1').each(function() {
          this.checked = false;                       
        });
      }
    });
    $('#set2_all').click(function(event) {   
      if(this.checked) {
        // Iterate each checkbox
        $('.s2').each(function() {
          this.checked = true;                        
        });
      } else {
        $('.s2').each(function() {
          this.checked = false;                       
        });
      }
    });
    $('#set3_all').click(function(event) {   
      if(this.checked) {
        // Iterate each checkbox
        $('.s3').each(function() {
          this.checked = true;                        
        });
      } else {
        $('.s3').each(function() {
          this.checked = false;                       
        });
      }
    });
    $('#set4_all').click(function(event) {   
      if(this.checked) {
        // Iterate each checkbox
        $('.s4').each(function() {
          this.checked = true;                        
        });
      } else {
        $('.s4').each(function() {
          this.checked = false;                       
        });
      }
    });

    

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
    