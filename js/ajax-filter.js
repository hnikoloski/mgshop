$(document).ready(function () {
  let filterAttr = "";
  let endpointUrl =
    window.location.origin + "/wp-json/wc/v3/products" + filterAttr;
  $(".js-filter-item").on("click", function (e) {
    e.preventDefault();
    $(".single-product").remove();
    $("#api-loader").show();

    if ($(this).attr("data-category") == "All") {
      filterAttr = "";
      endpointUrl =
        window.location.origin + "/wp-json/wc/v3/products" + filterAttr;
    } else {
      filterAttr = "?category=" + $(this).attr("data-category");
      endpointUrl =
        window.location.origin + "/wp-json/wc/v3/products" + filterAttr;
      console.log(endpointUrl);
    }
    fetchProducts();
  });

  function fetchProducts() {
    $.getJSON(endpointUrl, function (data) {
      $.each(data, function (index) {
        $("#api-loader").hide();
        $("#product-filter-results").append(
          '<div class="single-product"><a href="' +
            data[index].permalink +
            '" class="img-wrapper"><img src="' +
            data[index].images[0].src +
            '" alt="' +
            data[index].images[0].alt +
            '" class="img-fluid"></a><h4>' +
            data[index].name +
            "</h4>" +
            data[index].short_description +
            "<h3>" +
            thousands_separators(data[index].price) +
            '<span class="woocommerce-Price-currencySymbol">ден</span></h3><a class="product-btn" href="' +
            data[index].permalink +
            '">Select Options</a></div>'
        );
      });
    });
  }
  function thousands_separators(num) {
    var num_parts = num.toString().split(".");
    num_parts[0] = num_parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ".");
    return num_parts.join(".");
  }
  // fetchProducts();
});
