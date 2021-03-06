<!DOCTYPE html>
<html>
<html>
<head>
  <script src="ripple-0.16.5.js"></script>
  <script>
 console.log(ripple);
var api = new ripple.RippleAPI({server:'wss://xagate.com:48212'});
const address = 'rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH';
var orderbook3 = {
     "base": {
     "currency": "XRP",
    },
     "counter": {
     "currency": "NXT",
     "counterparty": "rGgS5Hw3PhSp3VNT43PDTXze9YfdthHUH"
   }
 };

function quit(message) {
  console.log(message);
  process.exit(0);
}

function fail(message) {
  console.error(message);
  process.exit(1);
}

  api.connect().then(() => {
  api.on('error', (errorCode, errorMessage) => { console.log(errorCode + ': ' + errorMessage); });
  console.log('Connected...');
  return api.getOrderbook(address, orderbook3).then(nxtorderbook => {
  //console.log(orderbook);
  str = JSON.stringify(nxtorderbook, null, 4); // (Optional) beautiful indented output.
  console.log(str); // Logs output to dev tools console.
  //alert(str); // Displays output using window.alert()
  document.body.innerHTML += "<pre>" + str + "</pre>";
});
});
  </script>
  <style type="text/css">
    td, th { border: 1px solid black; padding: 5px; }
    table { border-collapse: collapse; }
  </style>
</head>
<body>
</html>
