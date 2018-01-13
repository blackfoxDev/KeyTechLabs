<head>

 
</head>
<form id="form1" method="post">
  <div class="Code">
    <label for="data[Code][0]">Code</label>

    <input type="text" name="data[Code][0]" id="data[Code][0]" />
    <label for="data[keytag][0]">keytag</label>

    <input type="text" name="data[keytag][0]" id="data[keytag][0]" />
  </div>

  <button id="add-code">Add code</button>
  <br />
  <input type="submit" value="Submit" />
</form>

<script>
$(document).ready(function() {
  $("#add-code").click(function(e) {
    e.preventDefault();
    var numberOflines = $("#form1").find("input[name^='data[Code]']").length;
    var label = '<label for="data[Code][' + numberOflines + ']">Code ' + (numberOflines + 1) + '</label> ';
    var input = '<input type="text" name="data[Code][' + numberOflines + ']" id="data[Code][' + numberOflines + ']" />';
    var removeButton = '<button class="remove-code">Remove</button>';


    var numberOflines2 = $("#form1").find("input[name^='data[keytag]']").length;
    var label2 = '<label for="data[keytag][' + numberOflines2 + ']">keytag ' + (numberOflines2 + 1) + '</label> ';
    var input2 = '<input type="text" name="data[keytag][' + numberOflines2 + ']" id="data[keytag][' + numberOflines2 + ']" />';
    var html = "<div class='Code'>" + label + input + label2 + input2 + removeButton + "</div>";
    $("#form1").find("#add-code").before(html);
  });
});

$(document).on("click", ".remove-code", function(e) {
  e.preventDefault();
  $(this).parents(".Code").remove();
  //update labels
  $("#form1").find("label[for^='data[Code]'], label2[for^='data[keytag]'").each(function() {
    $(this).html("Code" + ($(this).parents('.Code').index() + 1));

  });
});
</script>
