// $(document).on('click','.uuid',function(){
//     var server = "http://localhost:8000/";
//     detail_agent();
//     function detail_agent(){
//         // e.preventDefault();
//         // var agentId = $(this).data('value');
//         var agentId = $(this).data('value');
//         alert(agentId);
//         $.ajax({            
//             // url: server+"detail-agent/"+agentId, 
//             url: server+"detail-agent/", 
//             type: 'GET',
//             data:{agentId:agentId},
//             success: function(data) {
//                 $('.detail-agent').html(data);
//             }
//         });
//         // alert(agentId);
//     }
// })
$(document).ready(function(){
    // use class selector instead of ID
    var server = "http://localhost:8000/";
    $(".uuid").on('click', function(evt) {
        var element = document.getElementById("content-agent");
   element.classList.add("d-none");
       // take only current clicked data element
       var agentId = $(this).data('value');
       $.ajax({
        url: server+"detail-agent/", 
        type: 'GET',
        data:{agentId:agentId},
          success: function(data) {
            $('.detail-agent').html(data);
          }   
       });   
    });  
});