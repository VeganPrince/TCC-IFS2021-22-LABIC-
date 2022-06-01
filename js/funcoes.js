function mudarStatus(_situation, _id) {
    $.ajax({
        method: "post",
        url: "ajaxMudarStatus.php",
        data: { situation: _situation, id: _id },
    });
}