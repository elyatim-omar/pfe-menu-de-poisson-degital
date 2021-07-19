$(document).ready(function () {
  var studentsList;
  function getall() {
    $(".studentsList").html(" ");
    $.ajax({
      url: "/api/getmenu.php",
      method: "GET",
      success: function (data) {
        studentsList = JSON.parse(data);
        console.log(studentsList);
        for (var i = 0; i < studentsList.length; i++) {
          $(".menuList").append(`
          <div class="col-lg-3 col-md-6">
          <div class="portfolio-item">
          <img src="uploads/fish.jpg" alt="1" class="rounded">
          <div class="portfolio-desc pt-2"><h4 class="mb-1">
           ${studentsList[i]["nom"]}
        </h4><div class="item-price">
        ${studentsList[i]["prix"]} DH
        </div></div></div></div>
        `);




        }
      }
    })
  }
  getall();
});