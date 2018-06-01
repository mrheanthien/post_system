
function showNotification(url, id){
    $.post(url, {id: id}, function(r) {

        m.alert(
            r.title,
            r.description,
            function(){
                if(r.refresh == 1){
                    location.reload();
                }
            }
        );

    }, 'JSON');
}