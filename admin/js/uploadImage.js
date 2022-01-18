var images = [];

function image_select() {
    var image = document.getElementById('image').files;
    for (i = 0; i < image.length; i++) {
        if (check_duplicate(image[i].name)) {
            images.push({
                "name": image[i].name,
                "url": URL.createObjectURL(image[i]),
                "file": image[i],
            })
        } else {
            $.confirm({
                icon: 'fas fa-exclamation-triangle',
                title: image[i].name,
                content: 'is already added to the list',
                type: 'orange',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Try again',
                        btnClass: 'btn-orange',
                        action: function() {}
                    }
                }
            });
        }
    }
    document.getElementById('form').reset();
    document.getElementById('container').innerHTML = image_show();

}

function image_show() {
    var image = "";
    images.forEach((i) => {
        image += `<div class="image_container d-flex justify-content-center position-relative">
                    <img src="` + i.url + `" alt="">
                    <span class="position-absolute" onclick="delete_image(` + images.indexOf(i) + `)">
                        <i class="fas fa-minus-circle" style="font-size: 20px;"></i>
                    </span>
                </div>`
    })
    return image;
}

function delete_image(e) {
    images.splice(e, 1)
    document.getElementById('container').innerHTML = image_show();
}

function check_duplicate(name) {
    var image = true;
    if (images.length > 0) {
        for (e = 0; e < images.length; e++) {
            if (images[e].name == name) {
                image = false;
                break;
            }
        }
    }

    if (images.length > 4) {
        for (e = 0; e < images.length; e--) {
            if (images[e].name == name) {
                image = false;
                break;
            }
            $.confirm({
                icon: 'fas fa-times-circle',
                title: 'Only 5 files ',
                content: 'Only 5 files are allowed to upload.',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    tryAgain: {
                        text: 'Ok',
                        btnClass: 'btn-red',
                        action: function() {}
                    }
                }
            });
        }
    }
    return image;
}