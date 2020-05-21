$.ajaxSetup({
    headers: {
        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
    }
});

$(document).ready(function() {
    $('#flyer-clicked').click(function(event) {
        event.preventDefault();
        var flyerID = event.target.id;
        if(flyerID){
            $.post("/addToClipping",{flyerID:flyerID}).done(function(data) {
                alert(data);
                var img = data;
                $('#DisplayImage').append('<div class="col-lg-3 col-md-4 col-6">'+'<img class="img-fluid img-thumbnail" src="'+img+'" alt="data">'+'</div>');
            });
        }
        else{
            alert("Please select a flyer");
        }
    });

    $("#shoppingListTable").on("click", "#remove", function() {
        var product = $(this).closest("tr").attr('id');
        $(this).closest("tr").remove();
    });
});
