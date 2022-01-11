<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>QR Code Fun</title>
  </head>
  <body>
    <p>Here is your QR code!</p>
    <img id='QrImage' src="qrcode.php?text=www.google.com&size=200&padding=10" alt="QR Code">
    <button type="button" onclick="printDiv()">Print</button>
</form> 
  </body>
  <script>
function printDiv() {
            window.print();
        }
  </script>
</html>