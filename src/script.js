const $ = require('jquery');
const Handlebars = require('handlebars');

$(document).ready(function() {
  var source = $("#template").html();
  var template = Handlebars.compile(source);
  $.ajax({
  url:'http://localhost/php-ajax-dischi/server.php',
  method: 'GET',
  success: function (data) {
    for (var i = 0; i < data.length; i++) {
      var context = {
        img_url: data[i].poster,
        title: data[i].title,
        author: data[i].author,
        year: data[i].year,
        };
        var html = template(context);
        $('.album-container').append(html);
    }
  },
  error: function(errors) {
  console.log(errors);
  }

});

});
