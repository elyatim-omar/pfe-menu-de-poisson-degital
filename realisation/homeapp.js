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
                    $(".homeList").append(`
                    <div class="oc-item">
                    <img class="topmargin-sm" src="uploads/${studentsList[i]["img"]}" alt="Image 1">
                    <div class="food-content clearfix">
                        <div class="d-flex flex-column flex-sm-row  mb-4">
                            <div class="heading-block border-bottom-0 mb-0">
                                <h3 class="font-secondary nott">Chocolate Cupcakes.</h3>
                            
                            </div>
                            <div class="food-price color font-primary mt-3">&dollar;19.99</div>
                        </div>	
                    </div>
                    </div>

          `);




                }
            }
        })
    }
    getall();
});