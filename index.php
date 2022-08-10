<html>
<head>
    <meta charset="utf-8" />
    <title>DateTimePicker example</title>
     <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div class="container">
       
          
            
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-center mt-5">
                       
                        <code> Holidays on:
                                <pre><?php  $holidays = array('10-08-2022','11-08-2022', '12-08-2022','13-08-2022');
                                print_r($holidays);
                                ?></pre>
                        You can changes holidays inside /function.php
                        </code>
                    </div>
                    
                    <div class="d-flex justify-content-center mt-3">
                        <form id="formsubmit"  method="post">
                            <input id="input" class="input" width="312" placeholder="click to select order date" name="datetime" required />
                            <button type="submit" name="submit" id="submit" class="btn btn-success mt-1">submit</button>
                        </form>
                    </div>
                    <div class="d-flex justify-content-center">
                         <code><span id="responce" class="lead"></span></code>
                    </div> 
                    
                </div>
            </div>
            
    </div>
    
   <!--scripts-->
   <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
       
    <script>
         $('#input').datetimepicker({
            uiLibrary: 'bootstrap4',
            format: 'HH:MM dd-mm-yyyy',
            modal: true,
            footer: true
        });
        
        $(document).ready(function() {
        $('#formsubmit').submit(function(e) {
            e.preventDefault();
            
            var datetime = $(".input").val();
            //By Spliting the input control value with space
            var time=datetime.split(' ')[0];
            var date=datetime.split(' ')[1];
            //alert(date);
            
            $.ajax({
                type: "POST",
                url: 'functions.php',
                data: {'time': time, 'date': date, 'call':1},
                success: function(response)
                {
                    //var jsonData = JSON.parse(response);
                    
                    $('#responce').html('Delivered by: ' + response);
     
                  
               }
                   });
             });
        });
    </script>
    
     
</body>
</html>