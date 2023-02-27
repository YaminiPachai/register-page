const contact = localStorage.getItem('contact');
const dob = localStorage.getItem('dob');
const gender = localStorage.getItem('gender');
const location = localStorage.getItem('location');
$.ajax({
    url: 'profile.php',
    type: 'POST',
    data: { contact: contact, dob: dob, gender: gender, location: location },
    success: function(response) {
        
        console.log(response);
    },
    error: function(jqXHR, textStatus, errorThrown) {
        
        console.error(errorThrown);
    }
});