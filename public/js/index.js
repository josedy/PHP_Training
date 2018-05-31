$(document).ready(function(){
    $("#myForm").submit(function(event) {
        var data = {
            name: $( "#name" ).val(),
            email: $( "#email" ).val(),
            phone: $( "#phone" ).val()
        };


        $.ajax({
            type: "POST",
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: "/setValues",
            data: data,
            success: function(response) {
                alert(response);
            }
        });
        /*$.post('/setValues', JSON.stringify({name: $name, email: $email, phone: $phone}), function(data, textStatus, xhr) {
            alert(data);
        });*/


        $("#name").val("");
        $("#email").val("");
        $("#phone").val("");
        event.preventDefault();
    });

    $("#getValues").click(function(event) {
        /* Act on the event */
        $.ajax({
            url: "/getValues"
        }).done(function(data) {
            $("#tbody").empty();
            $.each(data, function(i, val) {
                $("#tbody").append("<tr>"+
                    "<td>"+val.name+"</td>"+
                    "<td>"+val.email+"</td>"+
                    "<td>"+val.phone+"</td>"+
                    "<td class='text-center'><span class='fa fa-trash text-danger'></span></td>"+
                    "</tr>");
            });
        });
        event.preventDefault();
    });

    $val = $("#is_active").val();
    $("#"+$val).addClass("active");
    $("#"+$val).find("a").css("color","#000");
});

$(window).scroll(function() {
    if ($(document).scrollTop() > 300) {
        $(".navbar-brand > img").removeClass("hidden");
    } else {
        $(".navbar-brand > img").addClass("hidden");
    }
});
