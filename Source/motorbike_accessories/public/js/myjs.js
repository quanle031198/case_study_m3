//img--------------------------------------------------

        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#imagePreview').css('background-image', 'url('+e.target.result +')');
                    $('#imagePreview').hide();
                    $('#imagePreview').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#up_img").change(function() {
            readURL(this);
        });
//img--------------------------------------------------
       
//album ---------------------------------------------------

// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#imagePreview1').css('background-image', 'url('+e.target.result +')');
//             $('#imagePreview1').hide();
//             $('#imagePreview1').fadeIn(650);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// $("#up_img1").change(function() {
//     readURL(this);
// });

// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#imagePreview2').css('background-image', 'url('+e.target.result +')');
//             $('#imagePreview2').hide();
//             $('#imagePreview2').fadeIn(650);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// $("#up_img2").change(function() {
//     readURL(this);
// });

// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#imagePreview3').css('background-image', 'url('+e.target.result +')');
//             $('#imagePreview3').hide();
//             $('#imagePreview3').fadeIn(650);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// $("#up_img3").change(function() {
//     readURL(this);
// });
//album ---------------------------------------------------

