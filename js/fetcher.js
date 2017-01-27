$(document).ready(function(){
  $.ajax({
    url : 'https://tathmini-ekirapapaul.c9users.io/api_v1.php?module=tathmini&operation=getTbas',
    dataType: 'json',
    success : function(data){
      $.each(data , function(key,val){
        $('#tbaTable').append(
          '<tr>' +
            '<td>' +
              '<label class="custom-control custom-control-primary custom-checkbox">' +
              '<input class="custom-control-input" type="checkbox">' + '<span class="custom-control-indicator"></span>' +
              '</label>' +
            '</td>'+
            '<td class="nowrap">' +
              '<span class="icon-with-child m-r">' +
                '<img class="circle" width="36" height="36" src="img/1099386850.jpg" alt="Jessica Brown">' +
                '<span class="icon-child bg-warning circle sq-8"></span>' +
              '</span>' +
              '<strong>' + val.FirstName + ' ' +  val.LastName +  '</strong>' +
            '</td>' +
            '<td class="maw-320">' +
              '<span class="truncate">' + val.Location + '</span>' +
            '</td>' +
            '<td>' + val.Date + '</td>' +
            '<td>' +
              '<span class="label label-info label-pill">' + val.Training + '</span>' +
            '</td>' +
            '<td>Low</td>' +
            '<td>' + val.MothersLinkedTo + '</td>' +
            '<td>' +
              '<div class="btn-group pull-right dropdown">' +
                '<button class="btn btn-link link-muted" aria-haspopup="true" data-toggle="dropdown" type="button">' +
                  '<span class="icon icon-ellipsis-h icon-lg icon-fw"></span>' +
                '</button>' +
                '<ul class="dropdown-menu dropdown-menu-right">' +
                  '<li><a href="#">Assigned to me</a></li>' +
                  '<li><a href="#">Flag this TBA</a></li>' +
                  '<li><a href="#">monitor Incentives</a></li>' +
                '</ul>' +
              '</div>' +
            '</td>' +
        '</tr>');
      });
    },
    statusCode : {
      404 : function(){
        console.log("Error 404");
      }
    }
  });

  // $.getJSON('https://tathmini-ekirapapaul.c9users.io/api_v1.php?module=tathmini&operation=getTbas',function(data) {
  //   console.log(data);
  // },'jsonp');
});
