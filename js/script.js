function activate(element){
	//alert('clicked')
	$(element).attr('class','activate')
}
	function updateValue(element, column, id){
	var value = element.innerText
		$(element).attr('class','processing')
	//console.log(value+column+id);
	$.ajax({
	url:'functions.php',
	type: 'POST',
	data: {
	value: value,
	column: column,
	id: id
},
	success: function (php_result){
	console.log(php_result);
	$(element).removeAttr('class');
}
})
}