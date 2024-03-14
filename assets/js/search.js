const resultEl = document.getElementById("results");

function search(search_value) {
  if (search_value == "" || search_value == null || search_value == " ") { // fix the bug when search value is empty or null no result will be shown
    $("#results").html("");
    return;
  } else {
    $.ajax({
      url: "/models/searchEngine.php",
      type: "POST",
      data: { search: search_value },
      success: function (response) {
        $("#results").html(response);
      },
    });
  }
}
