function SubmitFormData() {
    var name = $("#name").val();
    var email = $("#email").val();
    var phone = $("#phone").val();
    var gender = $("input[type=radio]:checked").val();
    // $.post("", { name: name, email: email, phone: phone, gender: gender },
    // function(data) {
	//  $('#results').html(data);
	 $('#myForm')[0].reset();
    // });
}