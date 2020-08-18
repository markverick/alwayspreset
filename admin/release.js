(function () {
  window.addEventListener("load", init);
  function init() {
    populate();
    $("#filter").click(populate);
    $("#save").click(editCode);
    $("#sendMail").click(sendMail);
  }

  function sendMail() {
    data = {};
    data['name'] = this.dataset.name;
    data['code'] = this.dataset.code;
    data['to'] = this.dataset.email;
    if (data['code'] == "null") {
      alert("ยังไม่ได้สร้างโค้ด");
      return;
    }
    $.ajax({
        url: 'sendmail.php',
        type: 'post',
        data: data,
        success: function(data) {
          populate();
          alert("ส่งอีเมลล์เรียบร้อย");
        }
    });
  }

  function head(txt) {
    let dom = document.createElement("th");
    dom.scope = "row";
    dom.innerText = txt;
    return dom;
  }
  function cont(txt) {
    let dom = document.createElement("td");
    dom.innerHTML = txt;
    return dom;
  }

  function populate() {
    $.ajax({
        url: "customer.php?row=" + $("#numRow").val(),
        type: 'GET',
        success: function(res) {
          id("table").innerHTML = "";
          for (let i = 0; i < res.length; i++) {
            let src = null;
            if (res[i]['receipt_url'] == null) {
              src = "/img/blank.png";
            } else {
              src = "/" + res[i]['receipt_url'];
            }
            let thumb = document.createElement("td");
            thumb.classList.add("text-center");
            let img = document.createElement("img");
            img.src = src;
            img.classList.add("thumb");
            thumb.appendChild(img);
            img.addEventListener("click", ()=>{
              id("receiptImage").src = src;
              id("sendMail").dataset.name = res[i]['first_name'];
              id("sendMail").dataset.code = res[i]['code'];
              id("sendMail").dataset.email = res[i]['email'];
              $("#modal").modal();
            });
            let tr = document.createElement("tr");
            tr.appendChild(head(res[i]['id']));
            tr.appendChild(cont(res[i]['first_name']));
            tr.appendChild(cont(res[i]['last_name']));
            tr.appendChild(cont(res[i]['email']));
            tr.appendChild(cont(res[i]['mobile']));
            tr.appendChild(cont(res[i]['price'] + " บาท"));
            tr.appendChild(thumb);
            tr.appendChild(cont(res[i]['item_list']));
            tr.appendChild(cont(res[i]['date_submit']));
            tr.appendChild(cont(res[i]['code']));
            tr.appendChild(cont("<button class=\"edit-btn text-white btn btn-secondary btn-sm\" "
            + 'data-set1="' + res[i]['set1'] + '" '
            + 'data-set1p="' + res[i]['set1p'] + '" '
            + 'data-set2="' + res[i]['set2'] + '" '
            + 'data-set3="' + res[i]['set3'] + '" '
            + 'data-set4="' + res[i]['set4'] + '" '
            + 'data-set4p="' + res[i]['set4p'] + '" '
            + 'data-set5="' + res[i]['set5'] + '" '
            + 'data-seta="' + res[i]['seta'] + '" '
            + 'data-setb="' + res[i]['setb'] + '" '
            + 'data-setc="' + res[i]['setc'] + '" '
            + 'data-sets1="' + res[i]['sets1'] + '" '
            + 'data-sets2="' + res[i]['sets2'] + '" '
            + 'data-sets3="' + res[i]['sets3'] + '" '
            + 'data-sets4="' + res[i]['sets4'] + '" '
            + 'data-sets5="' + res[i]['sets5'] + '" '
            + 'data-id="' + res[i]['id'] + '" '
            + 'data-firstname="' + res[i]['first_name'] + '" '
            + 'data-lastname="' + res[i]['last_name'] + '" '
            + ">แก้ไขเซ็ต</button>"));
            tr.appendChild(cont("<button class=\"gen-btn text-white btn btn-danger btn-sm\" "
            + 'data-set1="' + res[i]['set1'] + '" '
            + 'data-set1p="' + res[i]['set1p'] + '" '
            + 'data-set2="' + res[i]['set2'] + '" '
            + 'data-set3="' + res[i]['set3'] + '" '
            + 'data-set4="' + res[i]['set4'] + '" '
            + 'data-set4p="' + res[i]['set4p'] + '" '
            + 'data-set5="' + res[i]['set5'] + '" '
            + 'data-seta="' + res[i]['seta'] + '" '
            + 'data-setb="' + res[i]['setb'] + '" '
            + 'data-setc="' + res[i]['setc'] + '" '
            + 'data-sets1="' + res[i]['sets1'] + '" '
            + 'data-sets2="' + res[i]['sets2'] + '" '
            + 'data-sets3="' + res[i]['sets3'] + '" '
            + 'data-sets4="' + res[i]['sets4'] + '" '
            + 'data-sets5="' + res[i]['sets5'] + '" '
            + 'data-id="' + res[i]['id'] + '" '
            + 'data-firstname="' + res[i]['first_name'] + '" '
            + 'data-lastname="' + res[i]['last_name'] + '" '
            + ">สร้างรหัส</button>"));
            // tr.innerHTML += "<td><button class=\"text-white btn btn-danger btn-sm\" data-toggle=\"modal\" data-id=\"{$id}\" data-code=\"{$code}\" data-note=\"{$note}\" data-expr=\"{$date_expr}\" data-target=\"#modal\">Send Mail</button></td>";
            id("table").appendChild(tr);
            qs(".edit-btn", tr).addEventListener("click", () => {
              id("set1").checked = res[i]['set1']=="1"? true:false;
              id("set1p").checked = res[i]['set1p']=="1"? true:false;
              id("set2").checked = res[i]['set2']=="1"? true:false;
              id("set3").checked = res[i]['set3']=="1"? true:false;
              id("set4").checked = res[i]['set4']=="1"? true:false;
              id("set4p").checked = res[i]['set4p']=="1"? true:false;
              id("set5").checked = res[i]['set5']=="1"? true:false;
              id("seta").checked = res[i]['seta']=="1"? true:false;
              id("setb").checked = res[i]['setb']=="1"? true:false;
              id("setc").checked = res[i]['setc']=="1"? true:false;
              id("sets1").checked = res[i]['sets1']=="1"? true:false;
              id("sets2").checked = res[i]['sets2']=="1"? true:false;
              id("sets3").checked = res[i]['sets3']=="1"? true:false;
              id("sets4").checked = res[i]['sets4']=="1"? true:false;
              id("sets5").checked = res[i]['sets5']=="1"? true:false;
              id("id").value = res[i]['id'];
              $("#editCodeModal").modal();
            });
            qs(".gen-btn", tr).addEventListener("click", genCode);
          }
        }
    });
  }

  function editCode() {
    let data = $("#editCodeForm").serialize();
    $.ajax({
        url: 'edit_customer_code.php',
        type: 'post',
        data: data,
        success: function() {
          populate();
          alert("แก้ไขเซ็ตเรียบร้อย");
        }
    });
  }

  function genCode() {
    let note = "Autogen: " + this.dataset.firstname + " " + this.dataset.lastname;
    let data = {};
    let id = this.dataset.id;
    data['note'] = note;
    data['days'] = 2;
    if (this.dataset.set1 === "1") {
      for (let i = 1; i <= 6; i ++) data['set1_' + i] = "on";
      data['set1_all'] = "on";
    }
    if (this.dataset.set2 === "1") {
      for (let i = 1; i <= 6; i ++) data['set2_' + i] = "on";
      data['set2_all'] = "on";
    }
    if (this.dataset.set3 === "1") {
      for (let i = 1; i <= 11; i ++) data['set3_' + i] = "on";
      data['set3_all'] = "on";
    }
    if (this.dataset.set4 === "1") {
      for (let i = 1; i <= 5; i ++) data['set4_' + i] = "on";
      data['set4_all'] = "on";
    }
    if (this.dataset.set4p === "1") {
      for (let i = 1; i <= 5; i ++) data['set4_' + i] = "on";
      data['set4_film'] = "on";
      data['set4_allp'] = "on";
    }
    if (this.dataset.set5 === "1") {
      for (let i = 1; i <= 4; i ++) data['set5_' + i] = "on";
      data['set5_all'] = "on";
    }
    if (this.dataset.set1p === "1") {
      for (let i = 1; i <= 6; i ++) data['set1_' + i] = "on";
      data['set1_ny'] = "on";
      data['set1_allp'] = "on";
    }
    if (this.dataset.seta === "1") data['set_a'] = "on";
    if (this.dataset.setb === "1") data['set_b'] = "on";
    if (this.dataset.setc === "1") data['set_c'] = "on";
    if (this.dataset.sets1 === "1") data['sets_1'] = "on";
    if (this.dataset.sets2 === "1") data['sets_2'] = "on";
    if (this.dataset.sets3 === "1") data['sets_3'] = "on";
    if (this.dataset.sets4 === "1") data['sets_4'] = "on";
    if (this.dataset.sets5 === "1") data['sets_5'] = "on";
    $.ajax({
        url: 'add_code.php',
        type: 'post',
        data: data,
        success: function(data) {
          updateCode(id, data);
          alert("รหัสดาวน์โหลด: " + data);
        }
    });
  }

  function updateCode(id, code) {
    data = {};
    data['id'] = id;
    data['code'] = code;
    $.ajax({
        url: 'update_customer.php',
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