
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});

$('.edit-post').on('click', function(){
    var url = $(this).attr('data-url');
    var id = $(this).attr('data-id');

    $.ajax({
        type     : "POST",
        url      : url,
        data     : {id_post:id },
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function(data) {
            $('#edit-editor').froalaEditor('html.set', data.text);
            $('input[name=post_id]').val(data.id);
            $('input[name=topic_id]').val(data.topic_id);
        },
    });
});
