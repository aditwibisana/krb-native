<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/core.css">
<link rel="stylesheet" type="text/css" href="css/base.css">
<link rel="stylesheet" type="text/css" href="css/custom.css">
<link rel="icon" type="image/png" href="favicon.png?v=2">
<script src="js/assets/jquery.js"></script>
<script type="text/javascript">
    $(document).on("click", ".open-AddBookDialog", function() {
        var myBookId = $(this).data('id');
        var myBookId1 = $(this).data('id1');
        var myBookId2 = $(this).data('id2');
        var myBookId3 = $(this).data('id3');
        var myBookId4 = $(this).data('id4');
        var myBookId5 = $(this).data('id5');
        var myBookId6 = $(this).data('id6');
        $(".modal-body #bookId").val(myBookId);
        $(".modal-body #bookId1").val(myBookId1);
        $(".modal-body #bookId2").val(myBookId2);
        $(".modal-body #bookId3").val(myBookId3);
        $(".modal-body #bookId4").val(myBookId4);
        $(".modal-body #bookId5").val(myBookId5);
        $(".modal-body #bookId6").val(myBookId6);
    });
</script>