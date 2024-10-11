
var imageInputElement = document.querySelector("#kt_image_input_example_1");
var imageInput = KTImageInput.getInstance(imageInputElement);
imageInput.on("kt.imageinput.change", function() {
    // console.log("kt.imageinput.change event is fired");
});