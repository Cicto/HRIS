$(document).ready(function () {
  const tooltipTriggerList = document.querySelectorAll(
    '[data-bs-toggle="tooltip"]'
  );
  const tooltipList = [...tooltipTriggerList].map(
    (tooltipTriggerEl) => new bootstrap.Tooltip(tooltipTriggerEl)
  );

  if ($(".form-header-sticky").length) {
    $(".form-header-sticky").css("top", $("#kt_app_header").height() + "px");
  }

  $(".form-select-search").select2();

  $(".mask-contact-number").mask("ZN00-000-0000", {
    translation: {
      Z: {
        pattern: /0/,
      },
      N: {
        pattern: /9/,
      },
    },
  });
});

$(".mask-number").mask("0", {
  watchInputs: true,
  onChange: function(cep, e, field, options){
    let mask = "0";
    console.log(mask)
    for (let i = 0; i < cep.length; i++) {
      mask += "0"
    }
    $('.mask-number').mask(mask, options);
  },
});

$(".mask-money").mask("#,##0.00", {reverse: true});

Inputmask({
  regex: "^[0-9]{1,6}(\\.\\d{1,2})?$",
  placeholder: "0"
}).mask(".mask-float");

$(".mask-float").on("mouseenter", function(e){
  e.stopImmediatePropagation();
  const placeholder = $(this).attr("placeholder");
  $(this).attr("placeholder", placeholder);
})

function getBarangaysCitiesAndPronvinces(barangay_id = false) {
  let barangays = (cities = provinces = null);
  $.ajax({
    url:
      base_url +
      `/UtilController/barangaysCitiesAndPronvinces${
        barangay_id ? "/" + barangay_id : ""
      }`,
    type: "get",
    dataType: "html",
    async: false,
    success: function (result) {
      result = JSON.parse(result);
      barangays = result.barangays;
      cities = result.cities;
      provinces = result.provinces;
    },
  });

  return {
    barangays: barangays,
    cities: cities,
    provinces: provinces,
  };
}

async function setBarangaysCitiesAndPronvincesOnDOM(selected_barangay = false) {
  $("#user-barangay").html(
    `<option value="" ${
      selected_barangay ? "" : "selected"
    } disabled >Barangay</option>`
  );
  $("#user-city").html(`<option value="" disabled >City/Municipality</option>`);
  $("#user-province").html(`<option value="" disabled >Province</option>`);

  const barangaysCitiesAndPronvinces = await getBarangaysCitiesAndPronvinces(
    selected_barangay
  );

  barangaysCitiesAndPronvinces.barangays.forEach((barangay) => {
    $("#user-province").append(
      `<option value="${barangay.id}" ${
        barangay.id == selected_barangay ? "selected" : ""
      }>${barangay.brgyDesc}</option>`
    );
  });

  barangaysCitiesAndPronvinces.cities.forEach((city) => {
    $("#user-city").append(
      `<option value="${city.citymunCode}" >${city.citymunDesc}</option>`
    );
  });

  barangaysCitiesAndPronvinces.provinces.forEach((province) => {
    $("#user-province").append(
      `<option value="${province.provCode}" >${province.provDesc}</option>`
    );
  });
}

const formRepeater = class {
  constructor(element, options = {}) {
    this.parent = $(element);
    const parent = $(element);
    const form_repeat = parent.find(".form-repeater-container");
    const add_button = parent.find(".form-repeater-add");
    const remove_button = parent.find(".form-repeater-remove");
    const validateRepeat = this.#validateRepeat;

    add_button.click(function(){
      const last_form_repeat = parent.find(".form-repeater-container").last();
      const is_valid = validateRepeat(last_form_repeat);
      console.log(last_form_repeat)
      if(!is_valid){
        return;
      }
      const new_form = last_form_repeat.clone();

      new_form.find(".form-repeater-label").addClass("h-none");
      new_form.insertAfter(last_form_repeat).find("input, select, textarea").val("").trigger("change")
      parent.find(".form-repeater-remove").removeAttr("disabled")
    })

    parent.on("click", ".form-repeater-remove", function(){
      if(parent.find(".form-repeater-container").length <= 1){
        $(this).closest(".form-repeater-container").find("input, select, textarea").val("").trigger("change")
      }else{
        $(this).closest(".form-repeater-container").remove();
        const has_hidden_label = $(this).closest(".form-repeater-container").find(".form-repeater-label").hasClass("h-none");
        if(!has_hidden_label){
          parent.find(".form-repeater-container").first().find(".form-repeater-label").removeClass("h-none")
        }
      }
    })
    
    if(options.hasOwnProperty("labeled")){
      if(options.labeled){
        const first_form_repeat = parent.find(".form-repeater-container").first();
        first_form_repeat.find("[data-name]").each(function (index, element) {
          const label = element.dataset.label ? element.dataset.label : "&nbsp;" ;
          const is_required = element.dataset.required == "" ? element.dataset.label ? "required" : "" : "" ;
          let classNames = "";
          if(options.labeled.hasOwnProperty("className")){
            classNames = options.labeled.className;
          }
          $(`<div class="form-repeater-label form-label ${classNames} ${is_required}" title="${label}">${label}</div>`).insertBefore(element);
        });
      }
    }
  }

  #validateRepeat(form_repeat_element){
    const required_elements = $(form_repeat_element).find(`*[data-required=""]`);
    required_elements.removeClass("form-invalid");
    let result = true;

    required_elements.each((index, element) => {
      if(!element.value){
        $(element).addClass("form-invalid").on("keydown change", function(e){
          $(element).removeClass("form-invalid").off("keydown change")
        });
        element.scrollIntoView({ behavior: "smooth", block: "center", inline: "nearest" });
        result = false;
        return false
      }
    })

    return result;
  }

  #validateAll(){
    const parent = this.parent;
    const form_repeaters = parent.find(".form-repeater-container");
    const validateRepeat = this.#validateRepeat;
    
    let result = true;

    if(form_repeaters.length == 1){
      const required_elements = form_repeaters.find(`*[data-required=""]`);

      //check if all have no values
      let is_empty = true;
      required_elements.each((index, element) => {
        is_empty = element.value == "" ? true : false;
        return is_empty;
      })

      if(is_empty){
        return result;
      }
    }

    form_repeaters.each((index, form_repeat) => {
      if(result){
        result = validateRepeat(form_repeat);
      }
    })
    return result;
  }

  #getValues(){
    const parent = this.parent;
    let result = [];

    parent.find(".form-repeater-container").each((index, form_repeat) => {
      const form_repeat_values = {};
      $(form_repeat).find(`[data-name]`).each((index, form_element) => {
        const name = form_element.dataset.name;
        form_repeat_values[name] = form_element.value;
      });

      let is_empty = true;
      for (const name in form_repeat_values) {
        if (Object.hasOwnProperty.call(form_repeat_values, name)) {
          const value = form_repeat_values[name];
          is_empty = value=="" ? true : false;
          if(!is_empty){
            break;
          }
        }
      }
      if(!is_empty){
        result.push(form_repeat_values);
      }
    });
    return result;
  }

  get is_valid(){
    return this.#validateAll();
  }

  get values(){
    const is_valid = this.#validateAll();
    if(is_valid){
      return this.#getValues()
    }else{
      return false;
    }
  }

  get element(){
    return this.parent;
  }
};