$(document).ready(function () {
  $("body").on("click", ".add-to-cart", function (e) {
    e.preventDefault();
    //console.log($(this).data("id"));
    $.ajax({
      method: "POST",
      url: "function.php",
      data: { id: $(this).data("id"), action: "add" },
      dataType: "JSON",
    }).done(function (data) {
      displayCart(data);
    });
  });
});
$("body").on("click", ".submitBtn", function (e) {
  e.preventDefault();
  //alert($(this).prev().val());
  $.ajax({
    method: "POST",
    url: "function.php",
    data: {
      id: $(this).data("id"),
      action: "update",
      value: $("#inputBtn-" + $(this).data("id")).val(),
    },
    dataType: "JSON",
  }).done(function (data) {
    displayCart(data);
  });
});
$("body").on("click", ".deleteBtn", function (e) {
  e.preventDefault();
  $.ajax({
    method: "POST",
    url: "function.php",
    data: {
      id: $(this).data("id"),
      action: "delete",
    },
    dataType: "JSON",
  }).done(function (data) {
    displayCart(data);
  });
});

/**
 * displayCart
 * used to display the table
 * @param {array} data
 */
function displayCart(data) {
  var nm = `
 <table>
  <tr>
    <th>Product Id</th>
    <th>Product Name</th>
    <th>Product Quantity</th>
    <th>Product Price</th>
    <th>Action</th>
  </tr>`;
  for (let index = 0; index < data.length; index++) 
  {
    nm += `
      <tr>
      <td>${data[index].id}</td>
      <td>${data[index].name}</td>
      <td>${data[index].quantity}<input type="number" id="inputBtn-${data[index].id}">
      <button data-id="${data[index].id}" type="submit" class ="submitBtn" >Add quantity</button></td>
      <td>${data[index].price * data[index].quantity}</td>
      <td><a href='#' data-id="${data[index].id}" class='deleteBtn'>X</a></td>
      </tr>`;
  }
  nm += `</table>`;
  $("#table").html(nm);
}
