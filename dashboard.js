$(function() {
  //$('.datepicker').datepicker();
  var formData = {
    mailId: 'saravanakumar@gmail.com'
  };
  $('#dashboard-email-id').text('saravanakumar@gmail.com');
  $.ajax({
    url: "http://localhost:8080/get_app_list",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data) {
        data.forEach(obj => {
          var option = '<option ';
          option += 'value=' + obj.appId + '>' + obj.appName + '</option>';
          $('#app-name').append(option);
        });
      } else {
        M.toast({
          html: 'Invalid Applicaation data'
        });
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });

  $.ajax({
    url: "http://localhost:8080/get_type_list",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data) {
        data.forEach(obj => {
          var option = '<option ';
          option += 'value=' + obj.typeId + '>' + obj.typeName + '</option>';
          $('#type-of-subscription').append(option);
        });
      } else {
        M.toast({
          html: 'Invalid Applicaation data'
        });
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });

  $.ajax({
    url: "http://localhost:8080/get_list_of_tracker",
    type: 'post',
    dataType: 'json',
    contentType: 'application/json',
    success: function(data) {
      if (data) {
        var table = $('#tracker-list');
        data.forEach(obj => {
          var row = '<tr class="single-row" ';
          var data = '';
          var columnData = '';
          Object.entries(obj).forEach(([key, value]) => {
            if ('mailId' == key || 'id' == key) {
              data += ' data-' + key + '=' + value;
            }
            if ('appId' == key || 'typeOfSubscribtion' == key) {
              var fieldValue = value.appName ? value.appName : value.typeName;
              var fieldId = value.appId ? value.appId : value.typeId;
              columnData += '<td>' + fieldValue + '</td>';
              data += ' data-' + key + '=' + fieldId;
            }
            if ('fromDate' == key || 'toDate' == key) {
              columnData += '<td>' + value + '</td>';
              data += ' data-' + key + '=' + value;
            }
          });
          row += data + '>' + columnData + '</tr>';
          table.append(row);
        });
      } else {
        M.toast({
          html: 'Invalid mail id'
        });
      }
    },
    error: function(XMLHttpRequest, textStatus, errorThrown) {
      $('#controller-result').text(errorThrown);
    },
    data: JSON.stringify(formData)
  });

  $('#tracker-list').delegate("tr.single-row", "dblclick", function(event) {
    $('#tracker-mailId').val(event.currentTarget.dataset.mailid);
    $('#tracker-id').val(event.currentTarget.dataset.id);
    $('#app-name').val(event.currentTarget.dataset.appid);
    $('#type-of-subscription').val(event.currentTarget.dataset.typeofsubscribtion);
    $('#from-date').val(event.currentTarget.dataset.fromdate);
    $('#to-date').val(event.currentTarget.dataset.todate);
    $("#myModal").modal("show");
  });
  $("#myModal").on('hidden.bs.modal', function() {
    $('#tracker-mailId').val(null);
    $('#tracker-id').val(null);
    $('#app-name').val(null);
    $('#type-of-subscription').val(null);
    $('#from-date').val(null);
    $('#to-date').val(null);
  });
  $("#add-new-app-btn").click(function() {
    $("#myModal").modal("show");
  });
});
