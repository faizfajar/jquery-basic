<!DOCTYPE html>
<html>
    <head>
        <script type="text/javascript" src="jquery-3.6.0.min.js"></script>
    </head>
    <body>
        <div id="tampil">Informasi akan ditampilkan disini</div>
        <button id="btn_tampil">Tampilkan</button>
        <script>
              $(document).ready(function(){
                  $('#btn_tampil').click(function(){
                      $('#tampil').load('demo.php');
                  });
              });
        </script>

    </body>
</html>