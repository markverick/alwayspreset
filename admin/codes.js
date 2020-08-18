(function () {
  window.addEventListener("load", init);
  function init() {
    populate();
    $("#filter").click(populate);
    $("#save").click(edit);
  }

  function populate() {
    $.ajax({
        url: "codes.php?row=" + $("#numRow").val(),
        type: 'GET',
        success: function(res) {
          $("#table").html(res);
          let btns = qsa(".remove-btn");
          for (let i = 0; i < btns.length; i++) {
            btns[i].addEventListener("click", expire);
          }
        }
    });
  }
  $('#modal').on('show.bs.modal', function (event) {
    let button = $(event.relatedTarget); // Button that triggered the modal
    let id = button.data('id'); // Extract info from data-* attributes
    let code = button.data('code'); // Extract info from data-* attributes
    let note = button.data('note'); // Extract info from data-* attributes
    let expr = button.data('expr'); // Extract info from data-* attributes
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    let modal = $(this);
    modal.find('.modal-title').text('Edit ' + id + ' #' + code);
    modal.find('.modal-body #editNote').val(note);
    modal.find('.modal-body #editExpr').val(expr.substring(0,10));
    modal.find('.modal-body #editId').val(id);
    // $.ajax({
    //     url: 'all_dl.php',
    //     type: 'post',
    //     data: {
    //       'code': code
    //     },
    //     success: function(data) {
    //       modal.find('.modal-body #listDl').html(data);
    //    }
    // });
  })

  function edit() {
    $.ajax({
        url: 'edit_list.php',
        type: 'post',
        data: $('form#editModal').serialize(),
        success: function(data) {
          populate();
       }
    });
    // alert(qsa("tr > th", this).innerText);
    // $.ajax({
    //     url: "edit.php?id=" . qsa("tr > th", this).innerText,
    //     type: 'GET',
    //     success: function(res) {
    //       id("table").innerHTML = res;
    //     }
    // });
  }

  function expire() {
    data = {};
    data['id'] = this.dataset.id;
    $.ajax({
        url: 'remove_code.php',
        type: 'post',
        data: data,
        success: function(data) {
          populate();
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