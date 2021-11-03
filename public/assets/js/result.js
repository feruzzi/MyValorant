$(document).on('click','.submit',function(){
    var server = "http://localhost:8000/";
    result();
    function result(){
        var averageXP=0;
        var dailyXP =0;
        var weeklyXP = 0;
        var currentTier = $('#current-tier').val();
        var currentXP = $('#current-tier-xp').val();
        var targetTier = $('#target-tier').val();
        var currentDate = $('#current-date').val();
        var endDate = $('#end-date').val();
        averageXP = $('#average-xp').val();
        dailyXP = $('#daily-mission').val();
        weeklyXP = $('#weekly-mission').val();
        // var cal = $('#current-xp').val();
        // cal = Number(cal);
        // $.ajaxSetup({
        //     headers: {
        //         'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        //     }
        // });
        $.ajax({            
            url: server+"calculate",
            type: 'POST',
            data:{currentXP:currentXP,
            currentTier:currentTier,
            targetTier:targetTier,
            currentDate:currentDate,
            endDate:endDate,
            averageXP:averageXP,
            dailyXP:dailyXP,
            weeklyXP:weeklyXP},
            success: function(data) {
                $('.result').html(data);
            }
        });
    }
})