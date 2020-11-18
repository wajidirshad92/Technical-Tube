<!DOCTYPE html>
<html>
<head>
<title>Dynamically Add Remove HTML Form Tags
</title>
<script src="./scripts/jquery-3.4.1.min.js"></script>
 <link href="./style/bulma-0.7.4/css/bulma.min.css" rel="stylesheet" type="text/css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"  rel="stylesheet" />
</head>
<body>
<div class="container">
<div class="column is-8 is-offset-2">
<div class="box" id="divquestion">
<div class="field is-horizontal">
<div class="field-body">
<div class="field">
<p class="control">
<strong style="cursor: pointer;" id="savequestions"><i class="fa fa-plus-square"></i>&nbsp;Add Question</strong>
</p></div>
<div class="field" id="divtextarea">
<p class="control" id="questionpara">
</p></div>
<div class="field">
<p class="control">
<input type="hidden" readonly name="txthideques_id" id="txthideques_id" />
</p></div>
</div></div>
<div class="field is-horizontal">
<div class="field-body">
<div class="field">
<p class="control"></p></div>
<div class="field">
<p class="control">
<input type="button"  name="btnaddquestion" style="display:none;" id="btnaddquestion" class="button is-large is-info is-fullwidth" value="Save Question" />
<span id="spanquestion" class="error"></span>
</p></div>
<div class="field">
<p class="control">
<input type="button" class="button is-large is-primary" style="display: none;" name="btnclearquestion"  id="btnclearquestion" value="Clear" /> 
</p></div>
</div></div>
<div class="column is-12" id="table_question"></div>
</div>
</form>
</div>
</div>
<script>
$(document).ready(function(){
	
	var count=0;
$(document).on('click','#savequestions',function(){
		count++;
		
		var fieldhorizontal='<div class="field is-horizontal" id="div'+count+'"><div class="field-body">';
		var fieldclose1='</div></div>';
		var field='<div class="field"><p class="control">';
		var fieldclose2='</div></p>';
		var question_no='<label class="label">Question#:'+count+'</label>';
		var closeicon='<i id="remove" class="fa fa-close fa-lg" style="cursor:pointer;"></i>';
		var textarea='<textarea  name="txtquestion[]" id="txtquestion[]" class="textarea is-info" cols="10" rows="3" />';
		$('#divtextarea').append('<p class="control">'+question_no+textarea+closeicon+'</p>');
	$('#btnclearquestion').show();
	$('#btnaddquestion').show();
});
$(document).on('click','#remove',function(){
	 $(this).parent().remove();
	 count--;
});
});

</script>
</body>
</html>
