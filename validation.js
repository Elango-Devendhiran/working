
// Password - display icon
const showPassword = document.querySelector("#show-password");
const passwordField = document.querySelector("#password");

showPassword.addEventListener("click", function(){
    this.classList.toggle("fa-eye-slash");
    const type = passwordField.getAttribute("type") === "password" ? "text" : "password";
    passwordField.setAttribute("type", type);
  })



//Confirm Password

var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
 




//   $(function () {
//     $("#btnSubmit").click(function () {
//         var password = $("#txtPassword").val();
//         var confirmPassword = $("#txtConfirmPassword").val();
//         if (password != confirmPassword) {
//             alert("Passwords do not match.");
//             return false;
//         }
//         return true;
//     });
// });





// function checkPassword(form) {
//     // get passwords from the field using their name attribute
//     const password = form.password.value;
//     const confirmPassword = form.confirmPassword.value;

//     // check if both match using if-else condition
//     if (password != confirmPassword) {
//       alert("Password did not match.");
//       return false;
//     } else {
//       alert("Password Matching");
//       return true;
//     }
//   }








// function name() {

//         var letters = [A-Za-z];
//         if(uname.value.match(letters))
//         {
//         return true;
//         }
//         else
//         {
//         alert('Username must have alphabet characters only');
//         uname.focus();
//         return false;
//         }
        
// }



// function email()
// {
// var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
// if(uemail.value.match(mailformat))
// {
// return true;
// }
// else
// {
// alert("You have entered an invalid email address!");
// uemail.focus();
// return false;
// }
// }


// function mobile() {
//     var mobileNumber = document.getElementById("txtMobileNumber").value;
//     var lblError = document.getElementById("lblError");
//     lblError.innerHTML = "";
//     var expr = /^(91)?[6-9][0-9]{9}$/;
//     if (!expr.test(mobileNumber)) {
//         lblError.innerHTML = "Invalid Mobile Number.";
//     }
// }


// function password()
// {
// var passid_len = passid.value.length;
// $uppercase = preg_match('@[A-Z]@', $password);
// $lowercase = preg_match('@[a-z]@', $password);
// $number    = preg_match('@[0-9]@', $password);
// $specialChars = preg_match('@[^\w]@', $password);
// if (passid_len == 0 ||passid_len >= 8 || passid_len < 12)
// {
// alert("Password should not be empty / length be between '8' to '12'");
// passid.focus();
// return false;
// }
// return true;
// }


// //     // Given password
// // $password = 'user-input-pass';

// // // Validate password strength
// // $uppercase = preg_match('@[A-Z]@', $password);
// // $lowercase = preg_match('@[a-z]@', $password);
// // $number    = preg_match('@[0-9]@', $password);
// // $specialChars = preg_match('@[^\w]@', $password);

// // if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8 || strlen($password) > 12) {
// //     echo 'Password should be at least 8 characters and maximum 12 charecters in length and should include at least one upper case letter, one number, and one special character.';
// // }else{
// //     echo 'Strong password.';
// // }