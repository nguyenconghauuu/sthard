<script type="text/javascript">
    function myProfile(){
        document.getElementById('container-options').classList.toggle('active');
    }

    function myAccount() {
        let element = document.getElementById('icons-1');
        let check = document.getElementById('nav-bar-account').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myTopic() {
        let element = document.getElementById('icons-2');
        let check = document.getElementById('nav-bar-topic').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myCourse() {
        let element = document.getElementById('icons-3');
        let check = document.getElementById('nav-bar-course').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myListContent() {
        let element = document.getElementById('icons-4');
        let check = document.getElementById('nav-bar-listcontent').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myQuestion() {
        let element = document.getElementById('icons-5');
        let check = document.getElementById('nav-bar-question').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myExam() {
        let element = document.getElementById('icons-6');
        let check = document.getElementById('nav-bar-exam').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function myStats() {
        let element = document.getElementById('icons-7');
        let check = document.getElementById('nav-bar-stats').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }

    function mySlideShow() {
        let element = document.getElementById('icons-8');
        let check = document.getElementById('nav-bar-slideshow').classList.toggle('active');
        if (check == true) {
            element.className = 'fa-solid fa-angle-down';
        } else {
            element.className = 'fa-solid fa-angle-right';
        }
    }
</script>

<script type="text/javascript">
    var editor_config = {
        path_absolute: "/",
        selector: 'textarea.my-editor',
        height: 250,
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback: function(callback, value, meta) {
            var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName(
                'body')[0].clientWidth;
            var y = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName(
                'body')[0].clientHeight;

            var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
            if (meta.filetype == 'image') {
                cmsURL = cmsURL + "&type=Images";
            } else {
                cmsURL = cmsURL + "&type=Files";
            }

            tinyMCE.activeEditor.windowManager.openUrl({
                url: cmsURL,
                title: 'Filemanager',
                width: x * 0.8,
                height: y * 0.8,
                resizable: "yes",
                close_previous: "no",
                onMessage: (api, message) => {
                    callback(message.content);
                }
            });
        }
    };
    tinymce.init(editor_config);
</script>